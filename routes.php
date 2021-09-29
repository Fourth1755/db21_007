<?php
    $controllers =array('pages'=>['home', 'error'], 'order'=>['index'], 'rate'=>['index']);
    function call($controller, $action){
        //echo "routes to".$controller."-".$action."<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "order": require_once("models/orderModels.php");
                        require_once("models/employeeModels.php");
                        $controller = new OrderController();
                        break;
            case "rate": require_once("models/rateModel.php");
                        $controller = new rateController();
                        break;
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller, $action);
        }
        else{
            call('pages', 'error');
        }   
    } 
    else{
        call('pages', 'error');
    }
?>