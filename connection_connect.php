<div style="background-color: #451009; text-align: center;" class="text-light">
<?php
    //เชื่อมต่อ server
    $severname = "localhost";
    $username = "db21_007";
    $password ="db21_007";
    $dbname = "db21_007";
    $conn = mysqli_connect($severname,$username,$password);
    mysqli_set_charset($conn, "utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo " Successfully connected to server ";
    }

    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        echo " Successfully connected to databse ";
    }
?>
</div>