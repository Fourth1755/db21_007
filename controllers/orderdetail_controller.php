<?php
     class OrderdetailController{
        public function index(){
            $Orderdetail=Orderdetail::getAll();
            require_once('views/orderdetail/index_Orderdetail.php');
        }
        public function newOrderdetail(){

            require_once('views/orderdetail/Orderdetail.php');
        }
        public function addOrderdetail(){
            $Orderdetail_ID=$_GET['Orderdetail_ID'];
            $Order_ID=$_GET['Order_ID'];
            $Colordetail_ID=$_GET['Colordetail_ID'];
            $Orderdetail_QuantityColor=$_GET['Orderdetail_QuantityColor'];
            $Orderdetail_Quantity=$_GET['Orderdetail_Quantity'];
            Orderdetail::add($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity);
            OrderdetailController::index();
        }
        public function updateForm(){
            $Orderdetail_ID=$_GET['Orderdetail_ID'];
            $Orderdetail=Orderdetail::get($Orderdetail_ID);
            //$studio_list=Studio::getAll();
            require_once('views/Orderdetail/updateForm.php');
        }
    }
?>
