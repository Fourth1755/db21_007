<?php
class ColorDetail{
    public $Product_ID;
    public $ColorDetail_ID;
    public $Color_Name;
}

public function __construct($Product_ID, $ColorDetail_ID, $Color_Name){
    $this->ColorDetail_ID = $ColorDetail_ID;
    $this->ColorDetail_ID = $ColorDetail_ID;
    $this->$Product_ID = $Product_ID;
}
public static function get($ColorDetail_ID){
    require("connection_connect.php");
    $sql = "select * from Rate where Rate_ID = '$ColorDetail_ID'";
    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();
    $Product_ID = $my_row[Product_ID];
    $ColorDetail_ID = $my_row[ColorDetail_ID];
    $Color_Name = $my_row[Color_Name];

    require("connection_close.php");
    return new ColorDetail($Product_ID, $ColorDetail_ID, $Color_Name);
}

public static function getAll(){
    $ColorDetailList = [];
    require("connection_connect.php");
    $sql = "select * from Product";
    $result = conn->query($sql);
    while($my_row = $result->fetch_assoc()){
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $Product_ID = $my_row[Product_ID];
        $ColorDetail_ID = $my_row[ColorDetail_ID];
        $Color_Name = $my_row[Color_Name];
        $ColorDetailList[] = new ColorDetail($Product_ID, $ColorDetail_ID, $Color_Name);
    }
    require("connection_close.php");

    return $ColorDetailList;
}

public static function add($Product_ID, $ColorDetail_ID, $Color_Name){
    require("connection_connect.php");
    $sql = "insert into Product(Product_ID, ColorDetail_ID, Color_Name) values('$Product_ID', '$ColorDetail_ID', '$Color_Name')";
    $result = conn->query($sql);
    require("connection_close.php");
    return "add success $result row";

}

public static function update($Product_ID, $ColorDetail_ID, $Color_Name){
    require("connection_connect.php");
    $sql = "UPDATE Product SET Product_ID = '$Product_ID', ColorDetail_ID = '$ColorDetail_ID', Color_Name = '$Color_Name'";
    $result = conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}

public static function delete($ColorDetail_ID){
    require_once("connection_connect.php");
    $sql = "Delete from Product where Product_ID = '$ColorDetail_ID'";
    $result = conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}



?>
