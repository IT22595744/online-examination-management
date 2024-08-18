<?php
        include 'config.php';

        //iNSERT
        if(isset($_POST['reg'])){
                $date = $_POST['date'];
                $title = $_POST['title'];
                $field = $_POST['field'];
                $message = $_POST['message'];

                $sql1 = "INSERT INTO notifications (date , title, field, message) VAlUES ('$date' , '$title' , '$field' , '$message')";

                $result1 = mysqli_query($conn, $sql1);

                header("Location:Notifications.php?sinup = success");
            }
    ?>