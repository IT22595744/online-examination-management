<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <!--<script src="./Login.js"></script>-->
        <script src="https://kit.fontawesome.com/64b267a712.js" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="navbar">
                <span class="navbar-text">CareerMe Exam</span>
                <img src="./imgs/ci.png" alt="Company Logo">
                <ul class="navbar-list">
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="./Exam.html">Exams</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                </ul>
                <div class="search">
                    <input class="srch", type="search" name="", placeholder="Type to text">
                    <a href="#"><button class="btn" >search</button></a>
                </div>
            </div>

            <div class="content">
                <div class="form">
                    <h2>Login</h2>
                    <form action="" method="POST">
                        <input type="text", name="username", placeholder="user name" id="username">
                        <input type="password", name="password", placeholder="password" id="password">
                        <i class="fa-solid fa-eye" id="eye" style="margin-left: -30px; cursor: pointer;"></i>
                        <div class="fp">
                            <a href="#">Forget password?</a>
                        </div>
                        <a href="Login.php">                       
                            <input type="submit" value="Login" class="btnn" id="btnn" >
                        </a>
                    </form>

                    <?php
                        include 'config.php';

                        $Uname = $_POST["username"];
                        $psswrd = $_POST["password"];
                                                                
                        $sql = "INSERT INTO exam (username,password) VALUES ('$Uname' , '$psswrd')";
                        $result = mysqli_query($conn, $sql);
                        echo '<script>alert("Data has been inserted")</script>';
                        header("Location:Login.php?signup = success");




                        //Insert (Create) Data:
                        /* include 'config.php';
                        $Uname = mysqli_real_escape_string($conn, $_POST["username"]);
                        $psswrd = mysqli_real_escape_string($conn, $_POST["password"]);

                        $sql = "INSERT INTO exam (username, password) VALUES ('$Uname', '$psswrd')";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "Data has been inserted successfully";
                        } else {
                            echo "Failed to insert data: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        */


                        //Read Data:
                        /*include 'config.php';
                        $sql = "SELECT * FROM exam";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Access data using $row['column_name']
                                $Uname = $row['username'];
                                $psswrd = $row['password'];

                                // Do something with the retrieved data
                                echo "Username: " . $Uname . ", Password: " . $psswrd . "<br>";
                            }
                        } else {
                            echo "No data found";
                        }

                        mysqli_close($conn);
                        */



                        //Update Data:
                        /* include 'config.php';
                        $Uname = mysqli_real_escape_string($conn, $_POST["username"]);
                        $NewPassword = mysqli_real_escape_string($conn, $_POST["new_password"]);

                        $sql = "UPDATE exam SET password = '$NewPassword' WHERE username = '$Uname'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "Data has been updated successfully";
                        } else {
                            echo "Failed to update data: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        */



                        //Delete Data:
                        /* include 'config.php';
                        $Uname = mysqli_real_escape_string($conn, $_POST["username"]);

                        $sql = "DELETE FROM exam WHERE username = '$Uname'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "Data has been deleted successfully";
                        } else {
                            echo "Failed to delete data: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        */
                    ?>

                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a></p>
                </div>

                <div class="footer">
                        <p>&copy; 2023 CareerMe Exam. All rights reserved.</p>
                        <div class="social-media-icons">
                                <a href="#"><img src="./imgs/facebook (1).png" alt="Facebook" class="icon"></a>
                                <a href="#"><img src="./imgs/instagram (1).png" alt="Facebook" class="icon"></a>
                                <a href="#"><img src="./imgs/twitter (1).png" alt="Facebook" class="icon"></a>
                        </div>
                </div>
            </div>
            <script src="./Password.js"></script>
    </body>
</html>