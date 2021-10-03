<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderdetail</title>
</head>
<body >
<div class="container">
        <h1>Orderdetail</h1>
        <form method="get"action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="orderdetail">
            <button type="submit" name="action" value="search">Search</button>
        </form>
        <table class="table">
        <tr><td>Orderdetail_ID</td><td>Order_ID</td><td>Colordetail_ID</td><td>Orderdetail_QuantityColor</td><td>Orderdetail_Quantity</td><td>Update</td><td>Delete</td></tr>
        <?php
            foreach($orderdetailList as $orderdetail){
            echo "<tr>
                <td>$orderdetail->Orderdetail_ID</td>
                <td>$orderdetail->Order_ID</td>
                <td>$orderdetail->Colordetail_ID</td>
                <td>$orderdetail->Orderdetail_QuantityColor</td>
                <td>$orderdetail->Orderdetail_Quantity</td>
                <td>
                    <a href=?controller=orderdetail&action=updateOrderForm&Orderdetail_ID=$orderdetail->Orderdetail_ID>Update</a>
                </td>
                <td>
                    <a href=?controller=orderdetaile&action=deleteRateConfirm&Orderdetail_ID=$orderdetail->Orderdetail_ID>Delete</a>
                </td></tr>";
            }
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=orderdetail&action=newOrderdetail>Add</a>
    </div>
    
    
    
</body>
</html>
