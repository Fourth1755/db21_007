
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
</head>
<body>
    <?php
    echo "<br>Are you sure to delete this order <br>
    <br> $order->id $order->date $order->sellerID $order->customerID <br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name="controller" value="order"/>
        <input type="hidden" name="orderID" value="<?php echo $order->id?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index">Back</button>
        <button  class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>
    </form>
</body>
</html>