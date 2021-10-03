<?php
     class OrderdetailController{
        public function index(){
            $orderdetail_list = Orderdetail::getAll();
            require_once('views/orderdetail/index_orderdetail.php');
        }
        public function newOrderdetail(){
            $order_list = Order::getAll();
            $colordetail_list = Colordetail::getAll();
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
        public function updateOrderForm(){
            $Orderdetail_ID=$_GET["Orderdetail_ID"];
            $orderdetail=Orderdetail::get($Orderdetail_ID);
            require_once('views/orderdetail/updateOrderdetailForm.php');
        }
        public function updateOrder(){
            $Orderdetail_ID=$_GET["Orderdetail_ID"];
            $Order_ID=$_GET["Order_ID"];
            $Colordetail_ID=$_GET["Colordetail_ID"];
            $Orderdetail_QuantityColor=$_GET["Orderdetail_QuantityColor"];
            $Orderdetail_Quantity=$_GET["Orderdetail_Quantity"];
            Orderdetail::update($Orderdetail_ID, $Order_ID,  $Colordetail_ID, $Orderdetail_QuantityColor,$Orderdetail_Quantity);
            OrderdetailController::index();
        }
        public function search(){
            $key=$_GET["key"];
            $orderdetail_list=Orderdetail::search($key);
            require_once('views/orderdetail/index_orderdetail.php');
        }
        public function deleteOrderdetailConfirm(){
            $Orderdetail_ID=$_GET['Orderdetail_ID'];
            $orderdetail = Orderdetail::get($Orderdetail_ID);
            require_once('views/orderdetail/deleteOrderdetailConfirm.php');
        }
        public function deleteOrderdetail(){
            $Orderdetail_ID=$_GET['Orderdetail_ID'];
            Orderdetail::delete($Orderdetail_ID);
            OrderdetailController::index();
        }
    }
?>
