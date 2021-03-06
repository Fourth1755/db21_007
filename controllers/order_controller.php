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
        public function customer(){
            $customer_list=Customer::getAll();
            require_once('views/order/customer.php');
        }
        public function newOrder(){
            $employee_list=Employee::getAll();
            $customer_list=Customer::getAll();
            require_once('views/order/newOrder.php');
        }
        public function addOrder(){
            $id=$_GET["id"];
            $date=$_GET["date"];
            $sellerID=$_GET["sellerID"];
            $customerID=$_GET["customerID"];
            $deposit=$_GET["deposit"];
            //$managerID=$_GET["managerID"];
            //$dateApprov=$_GET["dateApprov"];
            //$extraProduct=$_GET["extraProduct"];
            //$dateMenufacture=$_GET["dateMenufacture"];
            //$transmissionStatus=$_GET["transmissionStatus"];
            if($deposit==NULL){
                $deposit=0;
            }
            Order::add($id,$date,$sellerID,$customerID,$deposit);
            OrderController::index();
        }
        public function updateForm(){
            $id=$_GET["orderID"];
            $order=Order::get($id);
            $employee_list=Employee::getAll();
            $customer_list=Customer::getAll();
            require_once('views/order/updateForm.php');
        }
        public function updateOrder(){
            $id=$_GET["orderID"];
            $date=$_GET["date"];
            $sellerID=$_GET["sellerID"];
            $customerID=$_GET["customerID"];
            $deposit=$_GET["deposit"];
            $managerID=$_GET["managerID"];
            $dateApprov=$_GET["dateApprov"];
            $extraProduct=$_GET["extraProduct"];
            $dateMenufacture=$_GET["dateMenufacture"];
            $transmissionStatus=$_GET["transmissionStatus"];
            Order::update($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
            OrderController::index();
        }
        public function search(){
            $key=$_GET["key"];
            $order_list=Order::search($key);
            require_once('views/order/index_order.php');
        }
        public function deleteConfirm(){
            $id=$_GET['orderID'];
            $order=Order::get($id);
            require_once('views/order/deleteConfirm.php');
        }
        public function delete(){
            $id=$_GET['orderID'];
            $order=Order::delete($id);
            OrderController::index();
        }
    }
?>