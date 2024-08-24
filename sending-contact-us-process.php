<?php

$message = "";

if (isset($_POST['submit-button'])){

    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    include "create-connection.php";

    echo $message;

    $insert_user_query = "insert into `contact-form`(name, `phone-number`, `email-address`, subject, message) values('$name', ' $phoneNumber', '$emailAddress', '$subject', '$message')";
    
    if(mysqli_query($conn, $insert_user_query)){

        $message = "<div class = 'alert alert-success message' data-aos='fade-down' data-aos-easing='linear' data-aos-duration='500' role = 'alert' style = 'display:flex; align-items: center; justify-content: center; margin:auto; width:72%'>
        <i style = 'font-size: 50px; margin-left:5px !important; margin-right:5px !important;' class='fa fas fa-check-circle'></i><strong style = 'padding-right:5px'>Congratulations!</strong> Message is sent. Please expect us to reach out soon! Thanks!
      </div>";

    }
    else{
        $message = "<div class = 'alert alert-danger message' data-aos='fade-down' data-aos-easing='linear' data-aos-duration='1500' role = 'alert' style = 'display:flex; align-items: center; justify-content: center;'>
        <i style = 'font-size: 50px; margin-left:5px !important; margin-right:5px !important;' class='fa fas fa-times-circle'></i><strong style = 'padding-right:5px'>Sorry.</strong>  Something went wrong. Error:
      </div>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
}

?>