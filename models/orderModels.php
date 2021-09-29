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
        public static function search($key){
            require("connection_connect.php");
            $sql="SELECT * FROM anime NATURAL JOIN studio WHERE (animeName LIKE'%$key%' OR animeAried LIKE'%$key%' 
            OR animeEpisode LIKE'%$key%'OR studioName LIKE'%$key%'OR animeYear LIKE'%$key%'OR animeSeason LIKE'%$key%')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["animeID"];
                $name=$my_row["animeName"];
                $episode=$my_row["animeEpisode"];
                $aried=$my_row["animeAried"];
                $studioID=$my_row["studioID"];
                $studioName=$my_row["studioName"];
                $rating=$my_row["animeRating"];
                $year=$my_row["animeYear"];
                $season=$my_row["animeSeason"];
                $animeList[]=new Order($id,$date,$sellerID,$customerID,$deposit,$managerID,$dateApprov,$extraProduct,$dateMenufacture,$transmissionStatus);
            }
            require("connection_close.php");
            return $animeList;
        }
        public static function add($name,$episode,$aried,$studioID,$rating,$year,$season){
            require("connection_connect.php");
            $sql ="INSERT INTO anime (animeName,animeEpisode,animeAried,studioID,animeRating,animeYear,animeSeason)
            VALUES('$name','$episode','$aried','$studioID','$rating','$year','$season')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function update($id,$name,$episode,$aried,$studioID,$rating,$year,$season){
            require("connection_connect.php");
            $sql="UPDATE anime SET animeName='$name',animeEpisode='$episode',animeAried='$aried',studioID='$studioID',
            animeRating='$rating',animeYear='$year',animeSeason='$season' WHERE animeID='$id' ";
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