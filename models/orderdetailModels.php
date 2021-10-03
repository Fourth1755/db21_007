<?php
    class Orderdetail{
        public $Orderdetail_ID ;
        public $Order_ID ;
        public $Colordetail_ID ;
        public $Orderdetail_QuantityColor ;
        public $Orderdetail_Quantity ;
        
        public function __construct($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity){
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
            $OrderdetailList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM QuotationDetail";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Orderdetail_ID = $my_row["QuotationDetail_ID"];
                $Order_ID = $my_row["Quotation_ID"];
                $Colordetail_ID = $my_row["ColorDetail_ID"];
                $Orderdetail_QuantityColor = $my_row["QuotationDetail_QuantityColor"];
                $Orderdetail_Quantity = $my_row["QuotationDetail_Quantity"];

                $OrderdetailList[] = new Orderdetail($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity);
            }
            require("connection_close.php");
            return $OrderdetailList;
        }

        public static function add($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity){
            require("connection_connect.php");
            $sql ="INSERT INTO QuotationDetail (QuotationDetail_ID,Quotation_ID,ColorDetail_ID,QuotationDetail_QuantityColor,QuotationDetail_Quantity)
            VALUES('$Orderdetail_ID','$Order_ID','$Colordetail_ID','$Orderdetail_QuantityColor','$Orderdetail_Quantity')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";

        }
        public static function search($key){
            require("connection_connect.php");
            $sql = "SELECT QuotationDetail_ID,Quotation_ID,ColorDetail_ID,QuotationDetail_QuantityColor,QuotationDetail_Quantity FROM QuotationDetail
            WHERE (QuotationDetail_ID LIKE'%$key' OR Quotation_ID LIKE'%$key' OR ColorDetail_ID LIKE'%$key' OR QuotationDetail_QuantityColor LIKE'%$key' OR QuotationDetail_Quantity LIKE '$key')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Orderdetail_ID = $my_row["QuotationDetail_ID"];
                $Order_ID = $my_row["Quotation_ID"];
                $Colordetail_ID = $my_row["ColorDetail_ID"];
                $Orderdetail_QuantityColor = $my_row["QuotationDetail_QuantityColor"];
                $Orderdetail_Quantity = $my_row["QuotationDetail_Quantity"];

                $OrderdetailList[] = new Orderdetail($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity);
            }
            require("connection_close.php");
            return $rateList;
        }
        public static function update($Orderdetail_ID,$Order_ID,$Colordetail_ID,$Orderdetail_QuantityColor,$Orderdetail_Quantity){
            require("connection_connect.php");
            $sql="UPDATE QuotationDetail SET QuotationDetail_ID='$Orderdetail_ID',Quotation_ID=$Order_ID,ColorDetail_ID='$Colordetail_ID',QuotationDetail_QuantityColor='$Orderdetail_QuantityColor',QuotationDetail_Quantity='$Orderdetail_Quantity'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }

        public static function delete($Orderdetail_ID){
            require("connection_connect.php");
            $sql = "DELETE * FROM QuotationDetail WHERE QuotationDetail_ID='$Orderdetail_ID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
    }
?>
