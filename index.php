<?php 
    // if(isset($_GET['controller'])&&isset($_GET['action'])){
    //     $controller = $_GET['controller'];
    //     $action =$_GET['action'];
    // }
    // else{
    //     $controller='pages';
    //     $action='home';
    // }
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body style="font-family: 'Prompt', sans-serif; background-color: #EED5B4;">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #451009;">
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
          <a class="nav-link active" aria-current="page" href="?controller=rate&action=index_rate">Rate</a>
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
        <footer class="text-center text-lg-start text-light"style="background-color: #451009">
          <div class="container p-4">
            <div class="row" >
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">รายชื่อผู้จัดทำ</h4>
                <h6>นายภูริวัฒน์ ภูลับ              6220504755</h6>
                <h6>นางสาวลลิตา อภิรักษ์อุษณีย์     6220504771</h6>
                <h6>นายอาทฤต เย็นเปรม           6220504801</h6>
              </div>
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">DB21_007</h4>
                <p>
                  อาทฤต เย็นเปรม บอกกับพวกเราว่าทำเว็บสนุกจังเลยยยย<br>
                  อยากทำอีกเรื่อยๆ ทำตลอดไป ทำจนตาบวมไปเลย
                </p>
              </div>
            </div>
          </div>
          <div class="text-center p-3 text-dark" style="background-color: #eed5b4">
            © 2020 Copyright:
            <a class="text-dark" href="http://158.108.207.4/db21/db21_007/?controller=pages&action=home">db21_007</a>
          </div>
        </footer>
</body>
</html>