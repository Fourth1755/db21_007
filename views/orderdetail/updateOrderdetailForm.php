<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateOrderdetailForm</title>
</head>
        </select></label><br>
        <label>Product_Name<select name="Product_ID">
            <?php foreach($order_list as $order){
                echo "<option value=$order->id";
                if($order->id == $order->id){echo" selected = 'selected'";}
                echo ">$order->id</option>";
                }
            ?>
        <label>Order_ID<input type="text" name="Order_ID" value="<?php echo $orderdetail->Order_ID;?>"></label><br>
        <label>Colordetail_ID<input type="text" name="Colordetail_ID" value="<?php echo $orderdetail->Colordetail_ID;?>"></label><br>
        <form method="get" action="">
        <label>Orderdetail_QuantityColor<input type="text" name="Orderdetail_QuantityColor" value="<?php echo $orderdetail->Orderdetail_QuantityColor;?>"></label><br>
        <label>Orderdetail_Quantity<input type="text" name="Orderdetail_Quantity" value="<?php echo $orderdetail->Orderdetail_Quantity;?>"></label><br>
        
        <input type="hidden" name="controller" value="orderdetail"/>
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="updateOrderdetail">Update</button>
    </form>
</body>
</html>