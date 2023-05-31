<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/easymoney/Controllers/LoginControl.php");
$action = $_GET['action']; 
if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
    $email = $_SESSION['email'];
    $password = $_SESSION['password']; 
}else{
    $email = $_POST['email'];
    $password = $_POST['password'];
}
$loginControl = new LoginControl($email, $password);

switch($action){
    case "Logar":
        header("Content-Type: application/json; charset='UTF8'", true);
        echo json_encode($loginControl->getChecked());
        break;
    default:
        throw new Exception("Action Não Definida");
        break;
}