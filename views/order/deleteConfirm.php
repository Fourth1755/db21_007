
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
</head>
<body>
    <div class="container">
    <h1>Delete order</h1>
    <table class="table">
        <h4>Are you sure to delete this order</h4>
        <tr><td>ID</td><td>Date</td><td>Seller Name</td><td>Customer Name</td><td>Deposit</td><td>Manager Name</td><td>Date Approv</td><td>Extra Product</td>
        <td>Date Menufacture</td><td>Transmission Status</td></tr>
        <?php
            echo "<tr><td>$order->id</td>
                <td>$order->date</td>
                <td>$order->sellerName</td>
                <td>$order->customerName</td>
                <td>$order->deposit</td>
                <td>$order->managerName</td>
                <td>$order->dateApprov</td>
                <td>$order->extraProduct</td>
                <td>$order->dateMenufacture</td>
                <td>$order->transmissionStatus</td>    
                </table>";
        ?>
    <form method="get" action="" style="width: 40%;">
        <input type="hidden" name="controller" value="order"/>
        <input type="hidden" name="orderID" value="<?php echo $order->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
    </div>
</body>
</html>