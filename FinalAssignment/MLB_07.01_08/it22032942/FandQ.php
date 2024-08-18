
<!DOCTYPE html>
<html>
	<head>
		<title>User Interface</title>
		<link rel="stylesheet" href="faq.css">
		<script>
			function SendMessage(){
				alert("Message send successfully");
			}
		</script>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-text">CareerMe Exam</div>
			<img src="ci.png" alt="Company Logo">
			<div class="navbar-Unorder">
                <ul class="navbar-list">
				<li><a href="../it22595744/Home.html">Home</a></li>
                <li><a href="../it22608154/about.html">About Us</a></li>
                <li><a href="../it22927002/Exam.html">Exams</a></li>
                <li><a href="../it22608154/contact.html">Contact Us</a></li>
                </ul>
			</div>
            <div class="search">
				<input class="srch" type="search" name="AnyDoubt" placeholder="Type to text">
                <a href="#"><button class="btn" >search</button></a>
            </div>
        </div>
	<div class="form-body">
		<div class="heading">
		<h2>FAQ</h2>
		</div>
		<form name="myForm" onsubmit="return validateForm()" method="post" border="1" class="QandA">
		<fieldset>
		<div>
			<label for="fname">Full Name</label><br>
			<input type="text" name="fname1" id="fname" class="FName" placeholder="Enter Full Name" required>
		</div>
        <br><br>
		
		<div>
			<label for="mail">Email Address</label><br>
			<input type="text" name="email" id="mail" class="MIL" pattern="[a-zA-Z0-9#/%_.+-]+@[a-zA-Z]+\.[a-z]{2,3}" placeholder="Enter your mail" required>
		</div>
        <br><br>

		<div>
			<label for="sbjct">Subject</label><br>
			<input type="text" name="subject" id="sbjct" class="Subjects" placeholder="Enter the subject" required>
		</div>
        <br><br>
		
		<div>
			<label for="message">Message</label><br>
			<textarea name="message" id="message" rows="9" cols="9" class="msg" placeholder="Enter Your Message Here" required></textarea>
		</div>
        <br><br>
		
		<div class="sbmt">
        <input type="submit" id="buttn1" name="buttn1" value="Send Message" onclick="SendMessage()" class="butn">
		</div>
		<br><br><br>
		</fieldset>
		</form>
		<div class="fq">
			<form class="List" border="2">
			<fieldset>
			<legend>Lists</legend>
			<div class="faq-list">
				<ul class="u-list">
					<li><a href="#">Account FAQ</a></li>
					<br>
					<li><a href="#">Exam FAQ</a></li>
					<br>
					<li><a href="#">LAN Exam System FAQ</a></li>
				</ul>
			</div>
			</fieldset>
			</form>
		</div>
	</div>
	 <div class="footer">
        <p>&copy; 2023 CareerMe Exam. All rights reserved.</p>
        <div class="social-media-icons">
            <a href="#"><img src="./facebook (1).png" alt="Facebook" class="icon"></a>
            <a href="#"><img src="./instagram (1).png" alt="Instagram" class="icon"></a>
            <a href="#"><img src="./twitter (1).png" alt="Twitter" class="icon"></a>
        </div>
	</body>
</html>


<?php
    require 'common.php';

    if(isset($_POST['buttn1'])){
        $FullName=$_POST['fname1'];
        $Email=$_POST['email'];
        $Subject=$_POST['subject'];
        $Message=$_POST['message'];

        $sql= "INSERT INTO exam VALUES('','$FullName','$Email','$Subject',' $Message')";

        if(mysqli_query($connection,$sql)===true){
            echo "<script>Uploaded successfully</script>";
        }
        else{
            echo "Upload Failed";
        }
    }
?>