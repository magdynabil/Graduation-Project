<?php
include_once("include/connect.php");
include_once("include/function.php");
session_start();

?>
<!doctype html>
<html lang="en" class="first">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">


    <title>Login</title>
</head>
<body>
<!--start regestration form-->
<?php login_area(); ?>
<!--end regestration form-->
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
