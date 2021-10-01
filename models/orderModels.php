<?php
    class Order{
        public $id;
        public $date;
        public $sellerID;
        public $customerID;
        public $deposit;
        public $managerID;
        public $dateApprov;
        public $extraProduct;
        public $dateMenufacture;
        public $transmissionStatus;
        public function __construct($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            $this->id=$id;
            $this->date=$date;
            $this->sellerID=$sellerID;
            $this->customerID=$customerID;
            $this->deposit=$deposit;
            $this->managerID=$managerID;
            $this->dateApprov=$dateApprov;
            $this->extraProduct=$extraProduct;
            $this->dateMenufacture=$dateMenufacture;
            $this->transmissionStatus=$transmissionStatus;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM Quotation WHERE Quotation_ID='$id' ";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["Quotation_ID"];
            $date=$my_row["Quotation_Date"];
            $sellerID=$my_row["Seller_ID"];
            $customerID=$my_row["Customer_ID"];
            $deposit=$my_row["Quotation_Deposit"];
            $managerID=$my_row["Manager_ID"];
            $dateApprov=$my_row["Quotation_DateApprov"];
            $extraProduct=$my_row["Extra_Product"];
            $dateMenufacture=$my_row["Quotation_DateMenufacture"];
            $transmissionStatus=$my_row["Quotation_TransmissionStatus"];
            require("connection_close.php");
            return new Order($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
        }
        public static function getAll(){
            $orderList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Quotation";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["Quotation_ID"];
                $date=$my_row["Quotation_Date"];
                $sellerID=$my_row["Seller_ID"];
                $customerID=$my_row["Customer_ID"];
                $deposit=$my_row["Quotation_Deposit"];
                $managerID=$my_row["Manager_ID"];
                $dateApprov=$my_row["Quotation_DateApprov"];
                $extraProduct=$my_row["Extra_Product"];
                $dateMenufacture=$my_row["Quotation_DateMenufacture"];
                $transmissionStatus=$my_row["Quotation_TransmissionStatus"];
                $orderList[]=new Order($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
            }
            require("connection_close.php");
            return $orderList;
        }
        public static function add($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            require("connection_connect.php");
            //$sql ="INSERT INTO Quotation (Quotation_ID,Quotation_Date,Seller_ID,Customer_ID,Quotation_Deposit,Manager_ID,Quotation_DateApprov,Extra_Product,Quotation_DateMenufacture,Quotation_TransmissionStatus)
            //VALUES('$id','$date','$sellerID','$customerID',NULL,NULL,NULL,NULL,NULL,NULL)";
            $sql ="INSERT IGNORE INTO Quotation (Quotation_ID,Quotation_Date,Seller_ID,Customer_ID,Quotation_Deposit,Manager_ID,Quotation_DateApprov,Extra_Product,Quotation_DateMenufacture,Quotation_TransmissionStatus)
            VALUES('$id','$date','$sellerID','$customerID','$deposit','$managerID','$dateApprov','$extraProduct','$dateMenufacture','$transmissionStatus')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function update($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            require("connection_connect.php");
            $sql="UPDATE Quotation SET Quotation_ID='$id',Quotation_Date='$date',Seller_ID='$sellerID',Customer_ID='$customerID',
            Quotation_Deposit='$deposit',Manager_ID='$managerID',Quotation_DateApprov='$dateApprov',Extra_Product='$extraProduct'
            ,Quotation_DateMenufacture='$dateMenufacture',Quotation_TransmissionStatus='$transmissionStatus' WHERE Quotation_ID='$id' ";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM anime WHERE animeID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
    }
?>