<?php
     class rateController{
        public function index(){
            $rateList = Rate::getAll();
            require_once('views/rate/index_rate.php');
        }
        public function newRate(){
            $productList = Product::getAll();
            require_once('views/rate/newRate.php');
        }

        public function addRate(){
            $Product_ID = $_GET['Product_ID'];
            $Rate_ID = $_GET['Rate_ID'];
            $Rate_Quantity = $_GET['Rate_Quantity'];
            $Rate_Price = $_GET['Rate_Price'];
            $Rate_ScreenPrice = $_GET['Rate_ScreenPrice'];
            Rate::add($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);

            rateController::index();

        }
        
    }
?>