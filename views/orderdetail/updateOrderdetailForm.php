<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateOrderdetailForm</title>
</head>
<body>
    <form method="get" action="">
        <label>Orderdetail_ID<select name="Orderdetail_ID">
            <?php foreach($orderdetail_list as $Orderdetail){
                echo "<option value=$Orderdetail->Orderdetail_ID";
                if($Orderdetail->Orderdetail_ID == $Orderdetail->Product_ID){echo" selected = 'selected'";}
                echo ">$Orderdetail->Product_Name</option>";
                }
            ?>
        </select></label><br>
        <label>Order_ID<input type="text" name="Order_ID" value="<?php echo $orderdetail->Order_ID;?>"></label><br>
        <label>Colordetail_ID<input type="text" name="Colordetail_ID" value="<?php echo $orderdetail->Colordetail_ID;?>"></label><br>
        <label>Orderdetail_QuantityColor<input type="text" name="Orderdetail_QuantityColor" value="<?php echo $orderdetail->Orderdetail_QuantityColor;?>"></label><br>
        <label>Orderdetail_Quantity<input type="text" name="Orderdetail_Quantity" value="<?php echo $orderdetail->Orderdetail_Quantity;?>"></label><br>
        
        <input type="hidden" name="controller" value="orderdetail"/>
        <button type="submit" name="action" value="index_orderdetail">Back</button>
        <button type="submit" name="action" value="updateOrderdetail">Update</button>
    </form>
</body>
</html>