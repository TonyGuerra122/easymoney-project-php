<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Controllers/ServicesController.php");
class ServicesRouterController{

    public static function get($url, $callback){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET"){
            if($_GET['action'] == $url){
               if(isset($_GET['id'])){
                $servicesController = new ServicesController($_GET['id']);
               }else{
                $servicesController = new ServicesController;
               }
               $callback($servicesController->$url());
            }
        }
    }
    public static function post($url, $callback){
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
            if($_GET['action'] == $url){
               if(isset($_POST['id'])){
                $servicesController = new ServicesController($_POST['id']);
               }else{
                $servicesController = new ServicesController;
               }
               $callback($servicesController->$url());
            }
        }
    }
}