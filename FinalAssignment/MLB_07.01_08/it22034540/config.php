<?php
    $dbserverName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "itw";

    $conn = mysqli_connect($dbserverName , $dbUserName , $dbPassword , $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo '<script>alert("Login successful")</script>';
    }
    
?> 