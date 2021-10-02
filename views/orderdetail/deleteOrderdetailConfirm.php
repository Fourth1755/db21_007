<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Orderdetail</title>
</head>
<body>
    <div class="container">
    <h1>Delete Orderdetail</h1>
    <table class="table">
        <h4>Are you sure to delete this Orderdetail</h4>
        <tr><td>Orderdetail_ID</td><td>Order_ID</td><td>Colordetail_ID</td><td>Orderdetail_QuantityColor</td><td>Orderdetail_Quantity</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($orderdetail_list as $orderdetail){
            echo "<tr><td>$orderdetail->orderdetail_ID</td>
                <td>$orderdetail->Orderdetail_ID</td>
                <td>$orderdetail->Order_ID</td>
                <td>$orderdetail->Colordetail_ID</td>
                <td>$orderdetail->Orderdetail_QuantityColor</td>
                <td>$orderdetail->Orderdetail_Quantity</td>
                <td><a href=?controller=orderdetail&action=updateForm&Rate_ID=$orderdetail->Orderdetail_ID>Update</a></td>
                <td>Delete</td></tr>";
            }    
            echo "</table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="orderdetail"/>
        <input type="hidden" name="Orderdetail_ID" value="<?php echo $orderdetail->Orderdetail_ID?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>