<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateOrderdetailForm</title>
</head>
<body>
    <form method="get" action="">
        <label>Product_Name<select name="Product_ID">
            <?php foreach($productList as $Product){
                echo "<option value=$Product->Product_ID";
                if($Product->Product_ID == $Rate->Product_ID){echo" selected = 'selected'";}
                echo ">$Product->Product_Name</option>";
                }
            ?>
        </select></label><br>
        <label>Rate_ID<input type="text" name="Rate_ID" value="<?php echo $Rate->Rate_ID;?>"></label><br>
        <label>Rate_Quantity<input type="text" name="Rate_Quantity" value="<?php echo $Rate->Rate_Quantity;?>"></label><br>
        <label>Rate_Price<input type="text" name="Rate_Price" value="<?php echo $Rate->Rate_Price;?>"></label><br>
        <label>Rate_ScreenPrice<input type="text" name="Rate_ScreenPrice" value="<?php echo $Rate->Rate_ScreenPrice;?>"></label><br>
        
        <input type="hidden" name="controller" value="rate"/>
        <button type="submit" name="action" value="index_rate">Back</button>
        <button type="submit" name="action" value="updateRate">Update</button>
    </form>
</body>
</html>