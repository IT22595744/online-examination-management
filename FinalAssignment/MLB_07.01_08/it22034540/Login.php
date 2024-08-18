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
                <li><a href="../it22595744/Home.html">Home</a></li>
                <li><a href="../it22608154/about.html">About Us</a></li>
                <li><a href="../it22927002/Exam.html">Exams</a></li>
                <li><a href="../it22608154/contact.html">Contact Us</a></li>
                </ul>
                <div class="search">
                    <input class="srch", type="search" name="", placeholder="Type to text">
                    <a href="#"><button class="btn" >search</button></a>
                </div>
            </div>
            <span style="color:red">
            
            </span>

            <div class="content">
                <div class="form">
                    <h2>Login</h2>
                    <form action="log_in.php" method="POST">
                        <input type="text" name="username" placeholder="user name" id="username">
                        <input type="text", name="password", placeholder="password" id="password">
                        <i class="fa-solid fa-eye" id="eye" style="margin-left: -30px; cursor: pointer;"></i>
                        <div class="fp">
                            <a href="#">Forget password?</a>
                        </div>
                                               
                        <input type="submit" name="Login" class="btnn" id="btnn" >
                        
                    </form>
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