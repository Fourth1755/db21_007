<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delectOrderdetailConfirm</title>
</head>
<body>
<div class="container">
<h1>Delete orderdetail</h1>
<table class="table">
<h4>Are you sure to delete this orderdetail</h4>
<tr><td>Orderdetail_ID</td><td>Order_ID</td><td>Colordetail_ID</td><td>Orderdetail_QuantityColor</td><td>Orderdetail_Quantity</td><td>Update</td><td>Delete</td></tr>
    <?php 
        echo "<tr><br><td>$orderdetail->Orderdetail_ID</td>
        <td>$orderdetail->Order_ID</td>
        <td>$orderdetail->Colordetail_ID</td>
        <td>$orderdetail->Orderdetail_QuantityColor</td>
        <td>$orderdetail->Orderdetail_Quantity</td>  
        </table>";
    ?>
    <form method="get" action="">
        <input type="hidden" name="controller" value="orderdetail"/>
        <input type="hidden" name="Orderdetail_ID" value="<?php echo $orderdetail->Orderdetail_ID;?>"/>
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="deleteOrderdetail">Delete</button>
    </form>

</body>
</html>