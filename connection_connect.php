<?php
    //เชื่อมต่อ server
    $severname = "158.108.207.4:5738";
    $username = "db21_007";
    $password ="db21_007";
    $dbname = "db21_007";

    $conn = mysqli_connect($severname,$username,$password);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo "Successfully connected to server <br>";
    }

    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        echo "Successfully connected to databse <br>";
    }
?>