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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="?controller=order&action=index">Rate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="rate">
        <button class="btn btn-outline-light" type="submit" value="search" name="action">Search</button>
      </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>Product_ID</td><td>Product_Name</td><td>Rate_ID</td><td>Rate_Quantity</td><td>Rate_Price</td><td>Rate_ScreenPrice</td><td>Update</td><td>Delete</td></tr>
        <?php
            foreach($rateList as $Rate){
            echo "<tr>
                <td>$Rate->Product_ID</td>
                <td>$Rate->Product_Name</td>
                <td>$Rate->Rate_ID</td>
                <td>$Rate->Rate_Quantity</td>
                <td>$Rate->Rate_Price</td>
                <td>$Rate->Rate_ScreenPrice</td>"?>
                <td><a type="button" class="btn btn-outline-primary" href=?controller=rate&action=updateRateForm&<?php echo "Rate_ID=$Rate->Rate_ID";?>>Update</a></td>
                <td><a class="btn btn-danger" href=?controller=rate&action=deleteRateConfirm&<?php echo "Rate_ID=$Rate->Rate_ID";?>>Delete</a></td></tr>
                <?php
            }
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=rate&action=newRate>Add</a>
    </div>
    
    
    
</body>
</html>
