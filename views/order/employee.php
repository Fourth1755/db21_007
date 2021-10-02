<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <title>Employee</title>
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=order&action=customer">Customer</a>
        </li>
      </ul>
    </div>
    </div>
    </nav>
        <table class="table">
        <tr><td>ID</td><td>Name</td><td>positionID</td><td>positionName</td>
        <td>Update</td><td>Delete</td></tr>
        <?php
            foreach($employee_list as $emp){
            echo "<tr><td>$emp->id</td>
                <td>$emp->name</td>
                <td>$emp->positionID</td>
                <td>$emp->positionName</td>
                <td>Update</td>
                <td>Delete</td></tr>";
            }    
            echo "</table>";
        ?>
    </div>
</body>
</html>
