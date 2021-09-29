<?php
     class rateController{
        public function index(){
            $rateList = Rate::getAll();
            require_once('views/rate/index_rate.php');
        }
    }
?>