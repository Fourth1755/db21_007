<?php
    class Product{
        public $Product_ID;
        public $Product_Name;
        public $Product_Detail;
        public $Category_ID;
        public $Product_Stock;

        public function __construct($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock)
        {
            $this->Product_ID = $Product_ID;
            $this->Product_Name = $Product_Name;
            $this->Product_Detail = $Product_Detail;
            $this->Category_ID = $Category_ID;
            $this->Product_Stock = $Product_Stock;
        }

        public static function getAll(){
            $ProductList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Rate";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                
                $Product_ID = $my_row["Product_ID"];
                $Product_Name = $my_row["Product_Name"];
                $Product_Detail = $my_row["Product_Detail"];
                $Category_ID = $my_row["Category_ID"];
                $Product_Stock = $my_row["Product_Stock"];

                $ProductList[] = new Product($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock);
            }

            require("connection_close.php");
            return $rateList;
        }

        public function get($Product_ID){

            require("connection_connect.php");
            $sql = "SELECT * FROM Product WHERE Product_ID = $Product_ID";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $Product_ID = $my_row["Product_ID"];
            $Product_Name = $my_row["Product_Name"];
            $Product_Detail = $my_row["Product_Detail"];
            $Category_ID = $my_row["Category_ID"];
            $Product_Stock = $my_row["Product_Stock"];
            require("connection_close.php");

            return new Product($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock);

        }


    }

?>