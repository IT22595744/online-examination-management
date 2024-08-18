<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="onlineexamsystem";

    $connection=new mysqli("localhost","root","","onlineexamsystem");

    if($connection->connect_error){
        die("Upload failed :" .$connection->connect_error);
    }
    else{
        echo("Upload successfully");
    }

?>