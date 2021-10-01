<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateRateForm</title>
</head>
<body>
    <form method="get" action="">
        <label>Product_Name<select name="Product_ID">
            <?php foreach($productList as $Product){
                echo "<option values = $Product->Product_ID>$Product->Product_Name</option>";
                }
            ?>
        </label>
        <label>Rate_ID<input type="text" name="Rate_ID" value="<?php echo $Rate->Rate_ID;?>"></label>
        <label>Rate_Quantity<input type="text" name="Rate_Quantity" value="<?php echo $Rate->Rate_Quantity;?>"></label>
        <label>Rate_Price<input type="text" name="Rate_Price" value="<?php echo $Rate->Rate_Price;?>"></label>
        <label>Rate_ScreenPrice<input type="text" name="Rate_ScreenPrice" value="<?php echo $Rate->Rate_ScreenPrice;?>"></label>
        
    </form>
</body>
</html>