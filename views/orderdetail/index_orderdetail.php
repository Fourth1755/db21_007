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
<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: #974531;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=order&action=index">Orderdetail</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="orderdetail">
        <button class="btn btn-outline-light" type="submit" value="search" name="action">Search</button>
      </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>Orderdetail_ID</td><td>Order_ID</td><td>Colordetail_ID</td><td>Orderdetail_QuantityColor</td><td>Orderdetail_Quantity</td><td>Update</td><td>Delete</td></tr>
        <?php
            foreach($orderdetail_list as $orderdetail){
            echo "<tr>
                <td>$orderdetail->Orderdetail_ID</td>
                <td>$orderdetail->Order_ID</td>
                <td>$orderdetail->Colordetail_ID</td>
                <td>$orderdetail->Orderdetail_QuantityColor</td>
                <td>$orderdetail->Orderdetail_Quantity</td>"?>
                <td><a class="btn btn-outline-primary" href=?controller=orderdetail&action=updateOrderdetailForm&<?php echo"Orderdetail_ID=$orderdetail->Orderdetail_ID"; ?>>Update</a>
                </td>
                <td>
                    <a class="btn btn-danger" href=?controller=orderdetail&action=deleteOrderdetailConfirm&<?php echo"Orderdetail_ID=$orderdetail->Orderdetail_ID"; ?>>Delete</a>
                </td></tr>
            <?php    
            }
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=orderdetail&action=newOrderdetail>Add</a>
    <div class="container" style="text-align: center;">
        <h3>จัดทำโดยนางสาวลลิตา อภิรักษ์อุษณีย์ 6220504771</h3>
    </div>
    <br><br><br>
    </div>
    
</body>
</html>
