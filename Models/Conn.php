<?php
class Conn{
    private $host;
    private $dbname;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "easymoney";
        $this->user = "root";
        $this->password = "";
    }
    private function Pdo(){
        try{
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
        }catch(PDOException $e){
            die("ERROR:". $e->getMessage());
        }
        return $pdo;
    }
    public function getPdo(){
        return $this->Pdo();
    }
}