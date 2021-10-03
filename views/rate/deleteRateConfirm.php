<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delectRateConfirm</title>
</head>
<body>
    <div class="container">
        <h1>Delete Rate</h1>
        <h4>Are you sure to delete this Rate</h4><!--<br>Are you sure to delete this Rate <br>-->
    <?php echo "<br>Product_Name:$Rate->Product_Name, Rate_ID:$Rate->Rate_ID, Rate_Quantity:$Rate->Rate_Quantity, Rate_Price:$Rate->Rate_Price, Rate_ScreenPrice:$Rate->Rate_ScreenPrice<br><br>";?>
    <form method="get" action="">
        <input type="hidden" name="controller" value="rate"/>
        <input type="hidden" name="Rate_ID" value="<?php echo $Rate->Rate_ID;?>"/>
        <button class="btn btn-light" type="submit" name="action" value="index_rate">Back</button>
        <button class="btn btn-danger" type="submit" name="action" value="deleteRate">Delete</button>
    </form>

</body>
</html>