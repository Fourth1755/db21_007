<?php
     class OrderController{
        public function index(){
            $order_list=Order::getAll();
            require_once('views/order/index_order.php');
        }
        public function employee(){
            $employee_list=Employee::getAll();
            require_once('views/order/employee.php');
        }
        public function newOrder(){
            $employee_list=Employee::getAll();
            $customer_list=Customer::getAll();
            require_once('views/order/newOrder.php');
        }
        public function addOrder($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $sellerID=$_GET["sellerID"];
            $customerID=$_GET["customerID"];
            $deposit=$_GET["deposit"];
            $managerID=$_GET["managerID"];
            $dateApprov=$_GET["dateApprov"];
            $extraProduct=$_GET["extraProduct"];
            $dateMenufacture=$_GET["dateMenufacture"];
            $transmissionStatus=$_GET["transmissionStatus"];
            Order::add($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
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