<?php
session_start();
include_once('connect.php');


    $user=stripcslashes(mysqli_real_escape_string($connect,$_POST['user']));

    $password=md5($_POST['pass']);
    if(empty($user)){
        echo'<div class="alert alert-warning" role="alert">enter your name! </div>';
    }
    elseif(empty($_POST['pass'])){
        echo'<div class="alert alert-warning" role="alert"> enter your password! </div>';

    }else{
        $sql=mysqli_query($connect,"SELECT* FROM sin_up WHERE password='$password'and user_name='$user'or email='$user'");
        if(mysqli_num_rows($sql) !=1){

            echo'<div class="alert alert-warning" role="alert"> Invalid username or email! </div>';
        }
        else{
            $user=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$user['user_id'];
            $_SESSION['user_name']=$user['user_name'];
            $_SESSION['email']=$user['email'];
            $_SESSION['gender']=$user['gender'];
            $_SESSION['avatar']=$user['picture'];
            $_SESSION['about']=$user['about'];
            $_SESSION['facebook']=$user['facebook'];
            $_SESSION['instgram']=$user['instgeram'];
            $_SESSION['twitter']=$user['twitter'];
            $_SESSION['security_question_1']=$user['security_question_1'];
            $_SESSION['answer_1']=$user['answer_1'];
            $_SESSION['security_question_2']=$user['security_question_2'];
            $_SESSION['answer_2']=$user['answer_2'];
            $_SESSION['date']=$user['date'];
            echo'<div class="alert alert-success" role="alert"> Signed in </div>';
            echo'<meta http-equiv="refresh" content="1;\'web_main_page/index.php\'"/>';
        }

    }
?>