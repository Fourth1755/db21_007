<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Order</title>
</head>
<body >
    <div class="container">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=order&action=customer">Customer</a>
        </li>
      </ul>
    </div>
    <form class="d-flex" method="get" action="">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="key">
        <input type="hidden" name="controller" value="order">
        <button class="btn btn-outline-light" type="submit" value="search" name="action">Search</button>
      </form>
    </div>
    </nav>
        <table class="table">
        <tr><td>ID</td><td>Date</td><td>Seller Name</td><td>Customer Name</td><td>Deposit</td><td>Manager Name</td><td>Date Approv</td><td>Extra Product</td>
        <td>Date Menufacture</td><td>Transmission Status</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($order_list as $order){
            echo "<tr><td>$order->id</td>
                <td>$order->date</td>
                <td>$order->sellerName</td>
                <td>$order->customerName</td>
                <td>$order->deposit</td>
                <td>$order->managerName</td>
                <td>$order->dateApprov</td>
                <td>$order->extraProduct</td>
                <td>$order->dateMenufacture</td>
                <td>$order->transmissionStatus</td>";?>
                <td><a type="button" class="btn btn-outline-primary" href=?controller=order&action=updateForm&<?php echo "orderID=$order->id";?>></a><i class="fas fa-edit"></i></td>
                <td><a class="btn btn-danger"href=?controller=order&action=deleteConfirm&<?php echo "orderID=$order->id";?>>Delete</a></td>
                </tr>
            <?php
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=order&action=newOrder>Add new</a>
    </div>
    
    
    
</body>
</html>
