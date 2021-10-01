<?php
    class Rate{
        public $Rate_ID;
        public $Rate_Quantity;
        public $Rate_Price;
        public $Rate_ScreenPrice;
        public $Product_ID;
        public $Product_Name;

        public function __construct($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID, $Product_Name)
        {
            $this->Rate_ID = $Rate_ID;
            $this->Rate_Quantity = $Rate_Quantity;
            $this->Rate_Price = $Rate_Price;
            $this->Rate_ScreenPrice = $Rate_ScreenPrice;
            $this->Product_ID = $Product_ID;
            $this->Product_Name = $Product_Name;
        }

        public static function get($Rate_ID){
            require("connection_connect.php");
            $sql = "SELECT Product_ID, Product_Name, Rate_ID, Rate_Quantity, Rate_Price, Rate_ScreenPrice FROM Rate NATURAL JOIN Product 
            WHERE Rate_ID = $Rate_ID";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $Rate_ID = $my_row["Rate_ID"];
            $Rate_Quantity = $my_row["Rate_Quantity"];
            $Rate_Price = $my_row["Rate_Price"];
            $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
            $Product_ID = $my_row["Product_ID"];
            $Product_Name = $my_row["Product_Name"];
            require("connection_close.php");

            return new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID, $Product_Name);

        }

        public static function getAll(){
            $rateList = [];
            require("connection_connect.php");
            $sql = "SELECT Product_ID, Product_Name, Rate_ID, Rate_Quantity, Rate_Price, Rate_ScreenPrice FROM Rate NATURAL JOIN Product";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                
                $Rate_ID = $my_row["Rate_ID"];
                $Rate_Quantity = $my_row["Rate_Quantity"];
                $Rate_Price = $my_row["Rate_Price"];
                $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
                $Product_ID = $my_row["Product_ID"];
                $Product_Name = $my_row["Product_Name"];

                $rateList[] = new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID, $Product_Name);
            }

            require("connection_close.php");
            return $rateList;
        }

        public static function add($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID){
            require("connection_connect.php");
            $sql = "INSERT INTO Rate (Rate_ID, Rate_Quantity, Rate_Price, Rate_ScreenPrice, Product_ID) values ('$Rate_ID', '$Rate_Quantity', '$Rate_Price', '$Rate_ScreenPrice', '$Product_ID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result row";
        }

        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT Product_ID, Product_Name, Rate_ID, Rate_Quantity, Rate_Price, Rate_ScreenPrice FROM Rate NATURAL JOIN Product
            WHERE (Rate_ID LIKE'%$key' OR Product_ID LIKE'%$key' OR Product_Name LIKE'%$key' OR Rate_Quantity LIKE'%$key' OR Rate_Quantity LIKE '$key'
            OR Rate_Price LIKE '$key' OR Rate_ScreenPrice LIKE '$key')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Rate_ID = $my_row["Rate_ID"];
                $Rate_Quantity = $my_row["Rate_Quantity"];
                $Rate_Price = $my_row["Rate_Price"];
                $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
                $Product_ID = $my_row["Product_ID"];
                $Product_Name = $my_row["Product_Name"];

                $rateList[] = new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID, $Product_Name);
            }
            require("connection_close.php");
            return $rateList;
        }

        public static function update($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID){
            require("connection_connect.php");
            $sql = "UPDATE Rate SET Rate_ID = '$Rate_ID', Rate_Quantity = '$Rate_Quantity', Rate_Price = '$Rate_Price', Rate_ScreenPrice = '$Rate_ScreenPrice',
            Product_ID = '$Product_ID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }


    }

?>