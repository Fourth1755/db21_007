<?php
     class OrderController{
        public function index(){
            $order_list=Order::getAll();
            require_once('views/order/index_order.php');
        }
        public function newOrder(){
            $seller_list=Employee::getAll();
            $manager_list=Employee::getAll();
            $customer_List=Customer::getAll();
            require_once('views/order/newOrder.php');
        }
        public function addOrder(){
            $id=$_GET["Quotation_ID"];
            $date=$_GET["Quotation_Date"];
            $sellerID=$_GET["Seller_ID"];
            $customerID=$_GET["Customer_ID"];
            $deposit=$_GET["Quotation_Deposit"];
            $managerID=$_GET["Manager_ID"];
            $dateApprov=$_GET["Quotation_DateApprov"];
            $extraProduct=$_GET["Extra_Product"];
            $dateMenufacture=$_GET["Quotation_DateMenufacture"];
            $transmissionStatus=$_GET["Quotation_TransmissionStatus"];
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