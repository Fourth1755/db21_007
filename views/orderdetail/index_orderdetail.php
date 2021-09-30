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
        <h1>Orderdetail</h1>
        <table class="table">
        <tr><td>Orderdetail_ID</td><td>Order_ID</td><td>Colordetail_ID</td><td>Orderdetail_QuantityColor</td><td>Orderdetail_Quantity</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($orderdetail_list as $orderdetail){
            echo "<tr><td>$Rate->Product_ID</td>
                <td>$orderdetail->Orderdetail_ID</td>
                <td>$orderdetail->Order_ID</td>
                <td>$orderdetail->Colordetail_ID</td>
                <td>$orderdetail->Orderdetail_QuantityColor</td>
                <td>$orderdetail->Orderdetail_Quantity</td>
                <td><a href=?controller=orderdetail&action=updateForm&Rate_ID=$orderdetail->Orderdetail_ID>Update</a></td>
                <td>Delete</td></tr>";
            }    
            echo "</table>";
        ?>
    <!--<a class= "btn btn-success" href=?controller=orderdetail&action=newOrderdetail>add new</a>-->
    </div>
    
    
    
</body>
</html>
    
    
    
</body>
</html>