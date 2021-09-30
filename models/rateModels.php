<?php
    class Rate{
        public $Rate_ID;
        public $Rate_Quantity;
        public $Rate_Price;
        public $Rate_ScreenPrice;
        public $Product_ID;

        public function __construct($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID)
        {
            $this->Rate_ID = $Rate_ID;
            $this->Rate_Quantity = $Rate_Quantity;
            $this->Rate_Price = $Rate_Price;
            $this->Rate_ScreenPrice = $Rate_ScreenPrice;
            $this->Product_ID = $Product_ID;
        }

        public static function getAll(){
            $rateList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Rate";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                
                $Rate_ID = $my_row["Rate_ID"];
                $Rate_Quantity = $my_row["Rate_Quantity"];
                $Rate_Price = $my_row["Rate_Price"];
                $Rate_ScreenPrice = $my_row["Rate_ScreenPrice"];
                $Product_ID = $my_row["Product_ID"];

                $rateList[] = new Rate($Rate_ID, $Rate_Quantity, $Rate_Price, $Rate_ScreenPrice, $Product_ID);
            }

            require("connection_close.php");
            return $rateList;
        }

        

    }

?>