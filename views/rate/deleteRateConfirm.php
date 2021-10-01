<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delectRateConfirm</title>
</head>
<body>
    <?php echo "<br>Are you sure to delete this Rate <br>
                <br>$Rate->Product_Name, $Rate->Rate_ID, $Rate->Rate_Quantity, $Rate->Rate_Price, $Rate->Rate_ScreenPrice<br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name="controller" value="rate"/>
        <input type="hidden" name="Rate_ID" value="<?php echo $Rate->Rate_ID;?>"/>
        <button type="submit" name="action" value="index_rate">Back</button>
        <button type="submit" name="action" value="deleteRate">Delete</button>
    </form>

</body>
</html>