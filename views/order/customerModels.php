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
                $id=$my_row["Customer_ID"];
                $name=$my_row["Customer_Name"];
                $address=$my_row["Customer_Address"];
                $tel=$my_row["Customer_Tel"];
                $customerList[]=new Customer($id,$name,$address,$tel);
            }
            require("connection_close.php");
            return $customerList;
        }
    }
?>