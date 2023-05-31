<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/Models/Conn.php");
class User{
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $pdo;

    public function __construct($email, $password){
        $this->pdo = new Conn;
        if($email != null && $password != null){
            $query = $this->pdo->getPdo()->prepare("SELECT * FROM easymoney.users WHERE email = ? AND senha = ?");
            $query->bindValue(1, $email, PDO::PARAM_STR);
            $query->bindValue(2, md5($password), PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $this->id = $row['id'];
                    $this->name = $row['nome'];
                    $this->email = $email;
                    $this->password = $password;
                }
                return true;
            }else{
                return false;
            }
        }
    }
    public function addUser(){
        try{
            $query = $this->pdo->getPdo()->prepare("INSERT INTO easymoney.users VALUES (NULL, ?, ?, ?)");
            $query->bindValue(1, $_POST['login'], PDO::PARAM_STR);
            $query->bindValue(2, $_POST['email'], PDO::PARAM_STR);
            $query->bindValue(3, md5($_POST['password']), PDO::PARAM_STR);
            $query->execute();
            $retorno = true;
        }catch(PDOException $e){
            $retorno = new Exception($e);
        }
        return $retorno;
    }
    public function getName(){
        return $this->name;
    }
  
}