<?php
class Product{
    public $Product_ID;
    public $Product_Name;
    public $Product_Detail;
    public $Category_ID;
    public $Product_Stock;
}

public function __construct($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock){
    $this->Product_ID = $Product_ID;
    $this->Prodcut_Name = $Product_Name;
    $this->Product_Detail = $Product_Detail;
    $this->Category_ID = $Category_ID;
    $this->$Product_Stock = $Product_Stock;
}
public static function get($Product_ID){
    require("connection_connect.php");
    $sql = "select * from Product where Product_ID = 'Product_ID'";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $Product_ID = $my_row[Product_ID];
    $Product_Name = $my_row[Product_Name];
    $Product_Detail = $my_row[Product_Detail];
    $Category_ID = $my_row[Category_ID];
    $Product_Stock = $my_row[Product_Stock];

    require("connection_close.php");
    return new new Product($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock);
}

public static function getAll(){
    $ProductList = [];
    require("connection_connect.php");
    $sql = "select * from Product";
    $result = conn->query($sql);
    while($my_row = $result->fetch_assoc()){
        $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $Product_ID = $my_row[Product_ID];
    $Product_Name = $my_row[Product_Name];
    $Product_Detail = $my_row[Product_Detail];
    $Category_ID = $my_row[Category_ID];
    $Product_Stock = $my_row[Product_Stock];
    $ProductList[] = new Product($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock);
    }
    require("connection_close.php");

    return $ProductList;
}

public static function add($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock){
    require("connection_connect.php");
    $sql = "insert into Product(Product_ID, Product_Name, Product_Detail, Category_ID, Product_Stock) values('$Product_ID', '$Product_Name', '$Product_Detail', '$Category_ID', '$Product_Stock')";
    $result = conn->query($sql);
    require("connection_close.php");
    return "add success $result row";

}

public static function update($Product_ID, $Product_Name, $Product_Detail, $Category_ID, $Product_Stock){
    require("connection_connect.php");
    $sql = "UPDATE Product SET Product = '$Product_ID', Product_Name = '$Product_Name', Product_Detail = '$Product_Detail', Category_ID = '$Category_ID',
    Product_Stock = '$Product_Stock'";
    $result = conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}

public static function delete($Product_ID){
    require_once("connection_connect.php");
    $sql = "Delete from Product where Product_ID = '$Product_ID'";
    $result = conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}



?>
