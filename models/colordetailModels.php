<?php
    class Colordetail{
        public $Product_ID;
        public $Colordetail_ID;
        public $Color_Name;
        public function __construct($Product_ID,$Colordetail_ID,$Color_Name){
            $this->Product_ID=$Product_ID;
            $this->Colordetail_ID=$Colordetail_ID;
            $this->Color_Name=$Color_Name;
        }
        public static function getAll(){
            $colordetailList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM ColorDetail";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Product_ID=$my_row["Product_ID"];
                $Colordetail_ID=$my_row["ColorDetail_ID"];
                $Color_Name=$my_row["Color_Name"];
                $colordetailList[]=new Colordetail($Product_ID,$Colordetail_ID,$Color_Name);
            }
            require("connection_close.php");
            return $colordetailList;
        }
    }
?>