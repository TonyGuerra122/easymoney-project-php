<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Controllers/routers/ServicesRouterController.php");
ServicesRouterController::get("getTopFiveService", function($e){
    echo json_encode($e);
});
ServicesRouterController::get("getAllService", function($e){
    echo json_encode($e);
});