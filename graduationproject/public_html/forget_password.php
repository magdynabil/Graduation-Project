<?php

include_once("include/connect.php");
include_once("include/function.php");
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

error_reporting(0);

$errors ='';

if($_POST['submit']=='Send')
{
    //keep it inside
    $email=$_POST['email'];
    $password = $_GET['passsword'];
    $con=mysqli_connect("Localhost","root","","gradution_project");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con,"SELECT * FROM sin_up WHERE email='$email'")
    or die(mysqli_error($con));


        $mail = new PHPMailer;

        //Enable SMTP debugging. 
        $mail->SMTPDebug = 3;                               
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();            
        //Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;                          
        //Provide username and password     
        $mail->Username = "michaelihab1@gmail.com";                 
        $mail->Password = "i love my jesus24";                           
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";                           
        //Set TCP port to connect to 
        $mail->Port = 587;                                   

        $mail->From = "michaelihab1@gmail.com";
        $mail->FromName = "michael ihab";

        $mail->addAddress($email, "michael");

        $mail->isHTML();

        //$mail->Subject = "Subject Text";
        $mail->Body = "Your activation link is:http://localhost/graduationproject/public_html/reset_password.php?email=$email";
        //$mail->AltBody = "This is the plain text version of the email content";

        if(!$mail->send()) 
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } 
        else 
        {
            echo "Message has been sent successfully";
        }
    exit(0);
    
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">


    <title>we are</title>
</head>
<body>
<!--start signup-->

<div class="container sign_up  w-25">
<form class="text-center"action="forget_password.php" method="POST">
                        <!-- Email -->
                        <div class="md-form">
                        <?= $errors?>
                            <input type="email"name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>
                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit" value="Send">Send Code To Mail</button>
                        <!-- Social login -->
                        <a href="sign_up.php">Sign in</a>
                        <p>or sign in with:</p>
                        <a href="#"><i class="fab fa-facebook-square "></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin "></i></a>
                    </form>
</div>


<!--end signup-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/jsl.js"></script>
<script src="js/form.js"></script>
<script src="js/a.js"></script>

</body>
</html>
