<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Configs/Conn.php");
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
    protected function getTopFiveService(){
        $query = $this->pdo->getPdo()->prepare("SELECT title, valor, descricao,
        contratante, contratado, likes FROM easymoney.vw_top5_servicos");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function getAllServices(){
        $query = $this->pdo->getPdo()->prepare("SELECT * FROM easymoney.servico");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}