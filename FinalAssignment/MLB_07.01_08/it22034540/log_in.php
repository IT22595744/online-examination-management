<?php
session_start();

require_once('config.php');
if(isset($_POST['Login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  

  $login="SELECT * FROM `exam` WHERE `username`='$username' AND `password`='$password'";
  $login_run=mysqli_query($conn,$login);
  $data=mysqli_fetch_assoc($login_run);
  $id=$data['id'];


  if($login_run){
    $_SESSION['auth']=true;
    $_SESSION['id']=$id;
    header('LOCATION:Notifications.php');

  }





}







?>