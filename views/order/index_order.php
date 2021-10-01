<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body >
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=order&action=index">Order</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=order&action=employee">Employee</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="anime"/>
        <button class="btn btn-outline-success" type="submit" value="search" name="action">Search</button>
      </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>ID</td><td>Date</td><td>SellerID</td><td>CustomerID</td><td>Deposit</td><td>ManagerID</td><td>Date Approv</td><td>Extra Product</td>
        <td>Date Menufacture</td><td>Transmission Status</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($order_list as $order){
            echo "<tr><td>$order->id</td>
                <td>$order->date</td>
                <td>$order->sellerID</td>
                <td>$order->customerID</td>
                <td>$order->deposit</td>
                <td>$order->managerID</td>
                <td>$order->dateApprov</td>
                <td>$order->extraProduct</td>
                <td>$order->dateMenufacture</td>
                <td>$order->transmissionStatus</td>
                <td><a href=?controller=order&action=updateForm&orderID=$order->id>Update</a></td>
                <td><a href=?controller=order&action=deleteConfirm&orderID=$order->id>Delete</a></td>
                </tr>";
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=order&action=newOrder>add new</a>
    </div>
    
    
    
</body>
</html>
