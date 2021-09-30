<?php 
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action =$_GET['action'];
    }
    else{
        $controller='pages';
        $action='home';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <title>Premium shop</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Prompt', sans-serif;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=pages&action=home">Premium shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://158.108.207.4/db21">Index of /db21</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=order&action=index">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=orderdetail&action=index">Orderdetail</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?controller=rate&action=index">Rate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <?php
            echo "controller=".$controller.",action= ".$action;
        ?>
        <br>
        <?php require_once("routes.php") ?>
</body>
</html>