<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body >
    <div class="container">
        <h1>Order</h1>
        <table class="table">
        <tr><td>ID</td><td>Date</td><td>SellerID</td><td>CustomerID</td><td>Deposit</td><td>ManagerID</td><td>Date Approv</td><td>Extra Product</td>
        <td>Date Menufacture</td><td>Transmission Status</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($order_list as $order){
            echo "<tr><td>$order->id</td>
                <td>$order->date</td>
                <td>$order->sellerID</td>
                <td>$order->customerID</td>
                <td>$order->deposit</td>
                <td>$order->managerID</td>
                <td>$order->dateApprov</td>
                <td>$order->extraProduct</td>
                <td>$order->dateMenufacture</td>
                <td>$order->transmissionStatus</td>
                <td><a href=?controller=order&action=updateForm&orderID=$oreder->id>Update</a></td>
                <td>Delete</td></tr>";
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=order&action=newOrder>add new</a>
    </div>
    
    
    
</body>
</html>
