<?php
    class Position{
        public $id,$name;
        public function __construct($id,$name){
            $this->id=$id;
            $this->name=$name;
        }
        public static function getAll(){
            $positionList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Position";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $positionID=$my_row["Position_ID"];
                $positionName=$my_row["Position_Name"];
                $positionList[]=new Position($positionID,$positionName);
            }
            require("connection_close.php");
            return $positionList;
        }
    }
?>