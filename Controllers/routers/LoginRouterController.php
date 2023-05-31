<?php
require($_SERVER['DOCUMENT_ROOT'] . "/easymoney/Controllers/LoginControl.php");
class LoginRouterController{
    public static function get($url, $callback){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] ==  "GET"){
            if($_GET['action'] == $url){
                $email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
                $password = isset($_SESSION['password']) ? $_SESSION['password'] : null;
                $loginControl = new LoginControl($email, $password);
                $callback($loginControl->$url());
            }
        }
    }
    public static function post($url, $callback){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] ==  "POST"){
            if($_GET['action'] == $url){
                if(isset($_POST['email']) && isset($_POST['password']) || isset($_SESSION['email']) && isset($_SESSION['password'])){
                    $email = isset($_POST['email']) ? $_POST['email'] : $_SESSION['email'];
                    $password = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];
                    $loginControl = new LoginControl($email, $password);
                }else{
                    $loginControl = new LoginControl;
                }
                $callback($loginControl->$url());
            }
        }
    }
}