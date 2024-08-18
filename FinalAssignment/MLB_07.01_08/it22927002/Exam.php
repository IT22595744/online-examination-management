<?php
require 'connect.php';
if (isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $company=$_POST['company'];
    $job=$_POST['job'];

    $sql= "insert into profile(f_name,l_name,u_name,e_mail,company,job) 
    values('$fname','$lname','$uname','$email','$company','$job')";

    $result=mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_error($con));
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">  
</head>
<body>
    <div class="navbar">
        <span class="navbar-text">CareerMe Exam</span>
        <img src="./ci.png" alt="Company Logo">
        <ul class="navbar-list">
        <li><a href="../it22595744/Home.html">Home</a></li>
        <li><a href="../it22608154/about.html">About Us</a></li>
        <li><a href="../it22927002/Exam.html">Exams</a></li>
        <li><a href="../it22608154/contact.html">Contact Us</a></li>
        </ul>
    </div>

    <div>
        
        <img src="./images.png" class="edit_photo">
        <h1> EDIT PROFILE</h1>
        <div class="container">

            <div class="profile_photo">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
           
            <div id="profile_name"></div>

            </div>
            <div class="text">
            <h1> MY PROFILE INFO </h1>

            <form class="profile" method="POST">
            <label id = "fname" class="info"> First Name :</label>
            <input type = "text" value="John" class="inputs" name="fname"><br><br>

            <label id = "lname" class="info">  Last Name :</label>
            <input type = "text" value="Peries" class="inputs" name="lname"><br><br>
          
            <label id = "uname" class="info">  Username :</label>
            <input type = "text" value="John@123" class="inputs" name="uname"><br><br>

            <label id = "email" class="info">E mail: </label>
            <input type = "text" value="John@gmail.com" class="inputs" name="email"><br><br>

            <label id = "company" class="info">Company :</label>
            <input type = "text" value="PED bank" class="inputs" name="company"><br><br>

            <label id = "Job" class="info"> Job :</label>
            <input type = "text" value="Banking Assistant" class="inputs" name="job"><br><br>

            <button id="sv_chng" type="submit" name="submit">Save changes</button>

            </form>   
        </div>
        <div class="pw" ></div>
    </div>
</body>
</html>