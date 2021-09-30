<?php
     class OrderdetailController{
        public function index(){
            $orderdetail_list = Orderdetail::getAll();
            require_once('views/orderdetail/index_orderdetail.php');
        }
        public function newOrderdetail(){
            $productList = Product::getAll();
            require_once('views/orderdetail/newOrderdetail.php');
        }

        public function addOrderdetail(){
            $Orderdetail_ID=$_GET ['Orderdetail_ID'];
            $Order_ID=$_GET ['Order_ID'];
            $Colordetail_ID=$_GET ['Colordetail_ID'];
            $Orderdetail_QuantityColor=$_GET ['Orderdetail_QuantityColor'];
            $Orderdetail_Quantity=$_GET ['Orderdetail_Quantity'];

            Orderdetail::add($Orderdetail_ID, $Order_ID,  $Colordetail_ID, $Orderdetail_QuantityColor,$Orderdetail_Quantity);

            OrderdetailController::index();

        }
        
    }
?>
