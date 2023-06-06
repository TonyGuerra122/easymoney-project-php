<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Configs/Conn.php");
require($_SERVER['DOCUMENT_ROOT'] . "/Controllers/LoginController.php");
class Services{
    protected $id;
    protected $value;
    protected $title;
    protected $desc;
    protected $likes;

    protected $pdo;

    public function __construct($id=null){
        $this->pdo = new Conn;

        if($id != null){
            $query = $this->pdo->getPdo()->prepare("SELECT * FROM easymoney.servico WHERE id = ?");
            $query->bindValue(1, $id, PDO::PARAM_INT);
            $query->execute();
            if($query->rowCount() > 0){
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $this->id = $id;
                    $this->value = $row['valor'];
                    $this->title = $row['title'];
                    $this->desc = $row['descricao'];
                    $this->likes = $row['likes'];
                }
                return true;
            }else{
                return false;
            }
        }
    }
    public function getTopFiveService(){
        $query = $this->pdo->getPdo()->prepare("SELECT title, valor, descricao,
        contratante, contratado, likes FROM easymoney.vw_top5_servicos");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllServices(){
        $query = $this->pdo->getPdo()->prepare("SELECT s.title, s.descricao,  
        s.valor, contratante.nome AS contratante, contratado.nome AS contratado, s.likes FROM easymoney.servico AS s INNER JOIN easymoney.users AS contratante ON 
        s.contratante = contratante.id INNER JOIN easymoney.users AS 
        contratado ON s.contratado = contratado.id");
        $query->execute();
        $RESULT = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($RESULT as &$row){
            if($row['contratado'] == "nulo"){
                $row['contratado'] = '<a href="#" class="btn btn-primary">Adicionar Proposta</a>';
            }
        }
        return $RESULT;
    }
    public function addService(){
        $loginController = new LoginController($_SESSION['email'], $_SESSION['password']);
        try{
            $query = $this->pdo->getPdo()->prepare("INSERT INTO easymoney.servico VALUES (NULL, ?, ?, ?, ?, NULL, 0)");
            $query->bindValue(1, $_POST['title'], PDO::PARAM_STR);
            $query->bindValue(2, $_POST['desc'], PDO::PARAM_STR);
            $query->bindValue(3, $_POST['value'], PDO::PARAM_STR);
            $query->bindValue(4, $loginController->getId(), PDO::PARAM_INT);
            $query->execute();
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}