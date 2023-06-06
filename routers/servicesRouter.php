<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Controllers/routers/ServicesRouterController.php");
ServicesRouterController::post("addService", function($e){
    header("Content-Type: application/json; charset='UTF8'", true);
    echo json_encode($e);
});
ServicesRouterController::get("getTopFiveService", function($e){
    echo json_encode($e);
});
ServicesRouterController::get("getAllServices", function($e){
    echo json_encode($e);
});