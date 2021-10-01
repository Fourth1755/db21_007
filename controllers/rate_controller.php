<?php
     class rateController{
        public function index_rate(){
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
            echo "$Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID in addRate";
            Rate::add($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);
            
            rateController::index_rate();
        }

        public function search(){
            $key = $_GET['key'];
            $rateList = Rate::search($key);
            require_once('views/rate/index_rate.php');
        }

        public function updateRateForm(){
            $Rate_ID = $_GET['Rate_ID'];
            $rate = Rate::get($Rate_ID); 
            $productList = Product::getAll();
            require_once('views/rate/updateRateForm.php');
        }

        public function updateRate(){
            $Product_ID = $_GET['Product_ID'];
            $Rate_ID = $_GET['Rate_ID'];
            $Rate_Quantity = $_GET['Rate_Quantity'];
            $Rate_Price = $_GET['Rate_Price'];
            $Rate_ScreenPrice = $_GET['Rate_ScreenPrice'];
            Rate::update($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);
            rateController::index_rate();
        }

        public function deleteRateConfirm(){
            $Rate_ID = $_GET['Rate_ID'];
            $Rate = Rate::get($Rate_ID);
            require_once('views/rate/deleteRateConfirm.php');
        }

        public function deleteRate(){
            $Rate_ID = $_GET['Rate_ID'];
            Rate::delete($Rate_ID);
            rateController::index_rate();
        }
        
    }
?>