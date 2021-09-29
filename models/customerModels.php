<?php
    class Customer{
        public $id;
        public $name;
        public $address;
        public $tel;
        public function __construct($id,$name,$address,$tel){
            $this->id=$id;
            $this->name=$name;
            $this->address=$address;
            $this->tel=$tel;
        }
        public static function getAll(){
            $customerList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Customer";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $Customer_ID=$my_row["Customer_ID"];
                $Customer_Name=$my_row["Customer_Name"];
                $Customer_Address=$my_row["Customer_Address"];
                $Customer_Tel=$my_row["Customer_Tel"];
                $customerList[]=new Customer($Customer_ID,$Customer_Name,$Customer_Address,$Customer_Tel);
            }
            require("connection_close.php");
            return $customerList;
        }
    }
?>