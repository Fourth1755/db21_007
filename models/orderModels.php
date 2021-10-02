<?php
    class Order{
        public $id;
        public $date;
        public $sellerID;
        public $sellerName;
        public $customerID;
        public $customerName;
        public $deposit;
        public $managerID;
        public $managerName;
        public $dateApprov;
        public $extraProduct;
        public $dateMenufacture;
        public $transmissionStatus;
        public function __construct($id,$date,$sellerID,$sellerName,$customerID,$customerName,$deposit,$managerID,$managerName,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            $this->id=$id;
            $this->date=$date;
            $this->sellerID=$sellerID;
            $this->sellerName=$sellerName;
            $this->customerID=$customerID;
            $this->customerName=$customerName;
            $this->deposit=$deposit;
            $this->managerID=$managerID;
            $this->managerName=$managerName;
            $this->dateApprov=$dateApprov;
            $this->extraProduct=$extraProduct;
            $this->dateMenufacture=$dateMenufacture;
            $this->transmissionStatus=$transmissionStatus;
        }
        public static function get($id){
            require("connection_connect.php");
            //$sql="SELECT DISTINCT * FROM Quotation WHERE Quotation_ID='$id' ";
            $sql="SELECT Quotation.Quotation_ID AS Quotation_ID,Quotation_Date,Seller_ID,Employee_Name AS Seller_Name,Quotation.Customer_ID AS Customer_ID,
            Customer_Name,Quotation_Deposit,Quotation.Manager_ID,Manager_Name,Quotation_DateApprov,Extra_Product,
            Quotation_DateMenufacture,Quotation_TransmissionStatus FROM Quotation 
            LEFT JOIN(SELECT Quotation_ID,Employee_ID,Employee_Name AS Manager_Name FROM Quotation LEFT JOIN Employee ON Quotation.Manager_ID=Employee.Employee_ID) AS a 
            ON Quotation.Quotation_ID=a.Quotation_ID LEFT JOIN Employee ON Quotation.Seller_ID=Employee.Employee_ID 
            LEFT JOIN Customer ON Quotation.Customer_ID=Customer.Customer_ID WHERE Quotation.Quotation_ID='$id'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["Quotation_ID"];
            $date=$my_row["Quotation_Date"];
            $sellerID=$my_row["Seller_ID"];
            $sellerName=$my_row["Employee_Name"];
            $customerID=$my_row["Customer_ID"];
            $customerName=$my_row["Customer_Name"];
            $deposit=$my_row["Quotation_Deposit"];
            $managerID=$my_row["Manager_ID"];
            $managerName=$my_row["Employee_Name"];
            $dateApprov=$my_row["Quotation_DateApprov"];
            $extraProduct=$my_row["Extra_Product"];
            $dateMenufacture=$my_row["Quotation_DateMenufacture"];
            $transmissionStatus=$my_row["Quotation_TransmissionStatus"];
            require("connection_close.php");
            return new Order($id,$date,$sellerID,$sellerName,$customerID,$customerName,$deposit,$managerID,$managerName,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
        }
        public static function getAll(){
            $orderList=[];
            require("connection_connect.php");
            //$sql="SELECT DISTINCT * FROM Quotation";//เขียนเพิ่มมา
            $sql="SELECT  Quotation.Quotation_ID AS Quotation_ID,Quotation_Date,Seller_ID,Employee_Name AS Seller_Name,Quotation.Customer_ID AS Customer_ID,
            Customer_Name,Quotation_Deposit,Quotation.Manager_ID,Manager_Name,Quotation_DateApprov,Extra_Product,
            Quotation_DateMenufacture,Quotation_TransmissionStatus FROM Quotation 
            LEFT JOIN(SELECT Quotation_ID,Employee_ID,Employee_Name AS Manager_Name FROM Quotation LEFT JOIN Employee ON Quotation.Manager_ID=Employee.Employee_ID) AS a 
            ON Quotation.Quotation_ID=a.Quotation_ID LEFT JOIN Employee ON Quotation.Seller_ID=Employee.Employee_ID 
            LEFT JOIN Customer ON Quotation.Customer_ID=Customer.Customer_ID  ORDER BY Quotation_ID";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["Quotation_ID"];
                $date=$my_row["Quotation_Date"];
                $sellerID=$my_row["Seller_ID"];
                $sellerName=$my_row["Seller_Name"];
                $customerID=$my_row["Customer_ID"];
                $customerName=$my_row["Customer_Name"];
                $deposit=$my_row["Quotation_Deposit"];
                $managerID=$my_row["Manager_ID"];
                $managerName=$my_row["Manager_Name"];
                $dateApprov=$my_row["Quotation_DateApprov"];
                $extraProduct=$my_row["Extra_Product"];
                $dateMenufacture=$my_row["Quotation_DateMenufacture"];
                $transmissionStatus=$my_row["Quotation_TransmissionStatus"];
                $orderList[]=new Order($id,$date,$sellerID,$sellerName,$customerID,$customerName,$deposit,$managerID,$managerName,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
            }
            require("connection_close.php");
            return $orderList;
        }
        public static function add($id,$date,$sellerID,$customerID,$deposit){
            require("connection_connect.php");
            $sql ="INSERT INTO Quotation (Quotation_ID,Quotation_Date,Seller_ID,Customer_ID,Quotation_Deposit,Manager_ID,Quotation_DateApprov,Extra_Product,Quotation_DateMenufacture,Quotation_TransmissionStatus)
            VALUES('$id','$date','$sellerID','$customerID',$deposit,NULL,NULL,NULL,NULL,NULL)";
            //$sql ="INSERT IGNORE INTO Quotation (Quotation_ID,Quotation_Date,Seller_ID,Customer_ID,Quotation_Deposit,Manager_ID,Quotation_DateApprov,Extra_Product,Quotation_DateMenufacture,Quotation_TransmissionStatus)
            //VALUES('$id','$date','$sellerID','$customerID','$deposit','$managerID','$dateApprov','$extraProduct','$dateMenufacture','$transmissionStatus')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function search($key){
            require("connection_connect.php");
            //$sql="SELECT * FROM Quotation WHERE (Quotation_ID LIKE '%$key' OR Quotation_Date LIKE '%$key' OR Seller_ID LIKE '%$key' 
            //OR Customer_ID LIKE '%$key' OR Quotation_Deposit LIKE '$key' OR  
            //OR Quotation_DateApprov LIKE '%$key' OR Extra_Product LIKE '$key' OR Quotation_DateMenufacture LIKE '%$key'
            //OR Quotation_TransmissionStatus LIKE '%$key')";

            //$sql="SELECT * FROM Quotation WHERE (Quotation_ID LIKE '%$key' OR Quotation_Date LIKE '%$key' OR Seller_ID LIKE '%$key' 
            //OR Customer_ID LIKE '%$key' OR Quotation_Deposit LIKE '$key')";

            $sql="SELECT  Quotation.Quotation_ID AS Quotation_ID,Quotation_Date,Seller_ID,Employee_Name AS Seller_Name,Quotation.Customer_ID AS Customer_ID,
            Customer_Name,Quotation_Deposit,Quotation.Manager_ID,Manager_Name,Quotation_DateApprov,Extra_Product,
            Quotation_DateMenufacture,Quotation_TransmissionStatus FROM Quotation 
            LEFT JOIN(SELECT Quotation_ID,Employee_ID,Employee_Name AS Manager_Name FROM Quotation LEFT JOIN Employee ON Quotation.Manager_ID=Employee.Employee_ID) AS a 
            ON Quotation.Quotation_ID=a.Quotation_ID LEFT JOIN Employee ON Quotation.Seller_ID=Employee.Employee_ID 
            LEFT JOIN Customer ON Quotation.Customer_ID=Customer.Customer_ID
            WHERE (Quotation.Quotation_ID LIKE '%$key' OR Quotation_Date LIKE '%$key' OR Seller_ID LIKE '%$key' OR Employee_Name LIKE '%$key'
            OR Quotation.Customer_ID LIKE '%$key' OR Customer_Name LIKE '%$key')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["Quotation_ID"];
                $date=$my_row["Quotation_Date"];
                $sellerID=$my_row["Seller_ID"];
                $sellerName=$my_row["Seller_Name"];
                $customerID=$my_row["Customer_ID"];
                $customerName=$my_row["Customer_Name"];
                $deposit=$my_row["Quotation_Deposit"];
                $managerID=$my_row["Manager_ID"];
                $managerName=$my_row["Manager_Name"];
                $dateApprov=$my_row["Quotation_DateApprov"];
                $extraProduct=$my_row["Extra_Product"];
                $dateMenufacture=$my_row["Quotation_DateMenufacture"];
                $transmissionStatus=$my_row["Quotation_TransmissionStatus"];
                $orderList[]=new Order($id,$date,$sellerID,$sellerName,$customerID,$customerName,$deposit,$managerID,$managerName,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
            }
            require("connection_close.php");
            return $orderList;

        }
        public static function update($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus){
            require("connection_connect.php");
            if($dateMenufacture!=""){
                $dateMenufacture="'".$dateMenufacture."'";
            }
            else{
                $dateMenufacture="NULL";
            }
            if($dateApprov!=""){
                $dateApprov="'".$dateApprov."'";
            }
            else{
                $dateApprov="NULL";
            }
            if($managerID!=""){
                $managerID="'".$managerID."'";
            }
            else{
                $managerID="NULL";
            }
            if($deposit==NULL){
                $deposit=0;
            }
            if($extraProduct==NULL){
                $extraProduct=0;
            }
            $sql="UPDATE Quotation SET Quotation_ID='$id',Quotation_Date='$date',Seller_ID='$sellerID',Customer_ID='$customerID', 
            Quotation_Deposit='$deposit',Manager_ID=$managerID,Quotation_DateApprov=$dateApprov,Extra_Product='$extraProduct',
            Quotation_DateMenufacture=$dateMenufacture, Quotation_TransmissionStatus='$transmissionStatus'
            WHERE Quotation_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM Quotation WHERE Quotation_ID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
    }
?>