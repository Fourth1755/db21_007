<?php
    class Employee{
        public $id;
        public $name;
        public $positionID;
        public $positionName;
        public function __construct($id,$name,$positionID,$positionName){
            $this->id=$id;
            $this->name=$name;
            $this->positionID=$positionID;
            $this->positionName=$positionName;
        }
        public static function getAll(){
            $employeeList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Employee NATURAL JOIN Position";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $employeeID=$my_row["Employee_ID"];
                $employeeName=$my_row["Employee_Name"];
                $positionID=$my_row["Position_ID"];
                $positionName=$my_row["Position_Name"];
                $employeeList[]=new Employee($employeeID,$employeeName,$positionID,$positionName);
            }
            require("connection_close.php");
            return $employeeList;
        }
    }
?>