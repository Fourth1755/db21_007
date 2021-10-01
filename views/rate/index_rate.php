<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate</title>
</head>
<body >
    <div class="container">
        <h1>Rate</h1>
        <form method="get"action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="rate">
            <button type="submit" name="action" value="search">Search</button>
        </form>
        <table class="table">
        <tr><td>Product_ID</td><td>Product_Name</td><td>Rate_ID</td><td>Rate_Quantity</td><td>Rate_Price</td><td>Rate_ScreenPrice</td><td>Update</td><td>Delete</td></tr>
        <?php
            foreach($rateList as $Rate){
            echo "<tr>
                <td>$Rate->Product_Name</td>
                <td>$Rate->Product_ID</td>
                <td>$Rate->Rate_ID</td>
                <td>$Rate->Rate_Quantity</td>
                <td>$Rate->Rate_Price</td>
                <td>$Rate->Rate_ScreenPrice</td>
                <td><a href=?controller=rate&action=updateRateForm&Rate_ID=$Rate->Rate_ID>Update</a></td>
                <td>Delete</td></tr>";
            }
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=rate&action=newRate>Add</a>
    </div>
    
    
    
</body>
</html>
