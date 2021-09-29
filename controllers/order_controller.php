<?php
     class OrderController{
        public function index(){
            $order_list=Order::getAll();
            require_once('views/order/index_order.php');
        }
        public function newOrder(){
            
            require_once('views/order/newOrder.php');
        }
        public function addOrder(){
            $name=$_GET['name'];
            $episode=$_GET['episode'];
            $aried=$_GET['aried'];
            $studioID=$_GET['studioID'];
            $rating=$_GET['rating'];
            $year=$_GET['year'];
            $season=$_GET['season'];
            Order::add($name,$episode,$aried,$studioID,$rating,$year,$season);
            OrderController::index();
        }
        public function updateForm(){
            $id=$_GET['orderID'];
            $order=Order::get($id);
            //$studio_list=Studio::getAll();
            require_once('views/order/updateForm.php');
        }
    }
?>