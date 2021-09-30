<?php
    class Orderdetail{
        public $Orderdetail_ID ;
        public $Order_ID ;
        public $Colordetail_ID ;
        public $Orderdetail_QuantityColor ;
        public $Orderdetail_Quantity ;
        public function __constuct($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity){
            $this->Orderdetail_ID=$Orderdetail_ID;
            $this->Order_ID=$Order_ID;
            $this->Colordetail_ID=$Colordetail_ID;
            $this->Orderdetail_QuantityColor=$Orderdetail_QuantityColor;
            $this->Orderdetail_Quantity=$Orderdetail_Quantity;
    }
    public static function get($Orderdetail_ID){
        require("connection_connect.php");
        $sql="SELECT * FROM QuotationDetail WHERE QuotationDetail_ID='$Orderdetail_ID' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Orderdetail_ID = $my_row["QuotationDetail_ID"];
        $Order_ID = $my_row["Quotation_ID"];
        $Colordetail_ID = $my_row["ColorDetail_ID"];
        $Orderdetail_QuantityColor = $my_row["QuotationDetail_QuantityColor"];
        $Orderdetail_Quantity = $my_row["QuotationDetail_Quantity"];
        require("connection_close.php");
        return new Orderdetail($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity);
    }

    public static function getAll(){
        $Orderdetail = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM QuotationDetail";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $Orderdetail_ID = $my_row["Orderdetail_ID"];
            $Order_ID = $my_row["Order_ID"];
            $Colordetail_ID = $my_row["Colordetail_ID"];
            $Orderdetail_QuantityColor = $my_row["Orderdetail_QuantityColor"];
            $Orderdetail_Quantity = $my_row["Orderdetail_Quantity"];
            $Orderdetail[] = new Orderdetail($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity);
        }
        require("connection_close.php");
        return $Orderdetail;
    }

    public static function add($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity){
        require("connection_connect.php");
        $sql = "INSERT INTO Orderdetail(Orderdetail_ID,Order_ID,Colordetail_ID,Orderdetail_QuantityColor,Orderdetail_Quantity) values('$Orderdetail_ID', '$Order_ID', '$Colordetail_ID', 
        '$Orderdetail_QuantityColor', '$Orderdetail_Quantity')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";

    }

    public static function delete($Orderdetail_ID){
        require("connection_connect.php");
        $sql = "DELETE * FROM QuotationDetail WHERE QuotationDetail_ID='$Orderdetail_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
    }
?>
