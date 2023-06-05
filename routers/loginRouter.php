<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Controllers/routers/LoginRouterController.php");
LoginRouterController::post("addUser", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});
LoginRouterController::post("login", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});
LoginRouterController::get("getChecked", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});
LoginRouterController::get("getName", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});
LoginRouterController::get("logout", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});