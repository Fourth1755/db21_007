<?php
     class rateController{
        public function index(){
            $rateList = Rate::getAll();
            require_once('views/rate/index_rate.php');
        }
        /*public function addRate(){
            $productList = Product::getAll();
            require_once('views/rate/addRate.php');
        }*/
        
    }
?>