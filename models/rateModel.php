<?php
class Rate{
    public $Rate_ID;
    public $Rate_Quantity;
    public $Rate_Price;
    public $Rate_ScreenPrice;
    public $Product_ID;

    public function __construct($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID){
        $this->Rate_ID = $Rate_ID;
        $this->Rate_Quantity = $Rate_Quantity;
        $this->Rate_Price = $Rate_Price;
        $this->Rate_ScreenPrice = $Rate_ScreenPrice;
        $this->$Product_ID = $Product_ID;
    }
    public static function get($Rate_ID){
        require("connection_connect.php");
        $sql = "select * from Rate where Rate_ID = '$Rate_ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Rate_ID = $my_row["Rate_ID"];
        $Rate_Quantity = $my_row["Rate_Quantity"];
        $Rate_Price = $my_row["Rate_Price"];
        $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
        $Product_ID = $my_row["Product_ID"];

        require("connection_close.php");
        return new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);
    }

    public static function getAll(){
        $RateList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Rate";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $Rate_ID = $my_row["Rate_ID"];
            $Rate_Quantity = $my_row["Rate_Quantity"];
            $Rate_Price = $my_row["Rate_Price"];
            $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
            $Product_ID = $my_row["Product_ID"];
            $RateList[] = new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);
        }
        require("connection_close.php");

        return $RateList;
    }

    public static function add($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID){
        require("connection_connect.php");
        $sql = "INSERT INTO Rate(Rate_ID, Rate_Quantity, Rate_Price, Rate_ScreenPrice, Product_ID) values('$Rate_ID', '$Rate_Quantity', '$Rate_Price', 
        '$Rate_ScreenPrice', '$Product_ID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";

    }

    public static function update($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID){
        require("connection_connect.php");
        $sql = "UPDATE Rate SET Rate_ID = '$Rate_ID', Rate_Quantity = '$Rate_Quantity', Rate_Price = '$Rate_Price', Rate_ScreenPrice = '$Rate_ScreenPrice',
        Product_ID = '$Product_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($Rate_ID){
        require("connection_connect.php");
        $sql = "DELETE from Rate where Rate_ID = '$Rate_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>
