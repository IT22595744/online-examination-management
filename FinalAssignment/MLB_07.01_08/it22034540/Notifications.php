<?php
    include 'config.php';
    include ('AddNew.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="navbar">
    <span class="navbar-text">CareerMe Exam</span>
    <img src="./imgs/ci.png" alt="Company Logo">
    <ul class="navbar-list">
    <li><a href="../it22595744/Home.html">Home</a></li>
    <li><a href="../it22608154/about.html">About Us</a></li>
    <li><a href="../it22927002/Exam.html">Exams</a></li>
    <li><a href="../it22608154/contact.html">Contact Us</a></li>
    </ul>
    <div class="search">
      <input class="srch" type="search" name="" placeholder="Type to text">
      <a href="#"><button class="btn">search</button></a>
    </div>
  </div>

  <div class="hero-section">
    <div class="hero-content">
      <h1>Welcome to CareerMe Exam</h1>
      <p>This system allows you to take online exams on various subjects. Please select an option below to get started.</p>
      <div class="subject-buttons">
        <a href="#" class="button1">Technical Knowledge</a>
        <a href="#" class="button1">Communication Skills</a>
        <a href="#" class="button1">Problem Solving</a>
        <a href="#" class="button1">Analytical Skills</a>
      </div>
    </div>
  </div>

  <div class="notification">
    <div class="top">
    <h2>Important Notification</h2>
    <div class="pline"><p>The scheduled maintenance of the system has been completed. You can now proceed with your exams.</p>
    <br>
    <?php
      $sql3 = "SELECT * FROM notifications";
      $result3 = mysqli_query($conn, $sql3);

      foreach ($result3 as $row){
        echo $row['title'] . "<br>";
        echo $row['field'] . "<br>";
        echo $row['message'] . "<br><br>";
      }

      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
    ?>
    </div></div>
  </div>

  <br><br><br>
  <div class="features-section">
    <h2>Features</h2>
    <div class="features">
      <div class="feature">
        <h3>Online Exams</h3>
        <p>Take exams online from the comfort of your home.</p>
      </div>
      <div class="feature">
        <h3>Subject Categories</h3>
        <p>Choose from a wide range of subject categories to test your knowledge.</p>
      </div>
      <div class="feature">
        <h3>Instant Results</h3>
        <p>Get instant results and feedback upon completing each exam.</p>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>&copy; 2023 CareerMe Exam. All rights reserved.</p>
    <div class="social-media-icons">
      <a href="#"><img src="./imgs/facebook (1).png" alt="Facebook" class="icon"></a>
      <a href="#"><img src="./imgs/instagram (1).png" alt="Instagram" class="icon"></a>
      <a href="#"><img src="./imgs/twitter (1).png" alt="Twitter" class="icon"></a>
    </div>
  </div>
</body>
</html>
