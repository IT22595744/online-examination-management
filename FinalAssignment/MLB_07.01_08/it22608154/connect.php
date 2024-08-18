<?php

$con =new mysqli('localhost','root','','profile_info');

if(!$con){
    die(mysqli_error($con));
}
?>