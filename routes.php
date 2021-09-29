<?php
<<<<<<< HEAD
    $controllers =array('pages'=>['home', 'error'], 'order'=>['index','newOrder','employee'], 'rate'=>['index']);
=======
    $controllers =array('pages'=>['home', 'error'], 'order'=>['index','newOrder'],'orderdetail'=>['index','newOrder'], 'rate'=>['index']);
>>>>>>> f903b3be6368cbb0129bf67b679b4d0d772c9d78
    function call($controller, $action){
        //echo "routes to".$controller."-".$action."<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "order": require_once("models/orderModels.php");
                        require_once("models/employeeModels.php");
                        require_once("models/customerModels.php");
                        $controller = new OrderController();
                        break;
            case "orderdetail": require_once("models/orderdetailModels.php");
                        $controller = new OrderdetailController();
                        break;
            case "rate": require_once("models/rateModels.php");
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