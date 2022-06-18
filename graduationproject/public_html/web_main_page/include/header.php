<!doctype html>
<html lang="en" class="first">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">

</head>
<body>
<!--start nav bar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <img style="height: 71px; width: 72px;border-radius: 0%; padding: 5px; margin-left: 0px;" src="../img/logo2.png"></a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li><li class="nav-item">
                    <a class="nav-link" href="Services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Carpooling.php">Carpooling</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="buslines.php">Bus Lines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loss_p.php">Lost People</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <img class=""style="  width:75px;
    height:75px;
    border-radius:50%;
    margin-left: 30px;
    padding: 5px;"  src="../<?php echo $_SESSION['avatar'] ?>" >

            <h3 class="font-weight-bold text-warning m-auto"> Hi, 
            <?php echo  ucfirst( $_SESSION['user_name'])?>
            </h3>

            <p class="text-light m-auto">
                <?php echo  substr($_SESSION['about'],0,50)?> 
            </p>

                 <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle nav-left " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../index.php">Personal Page</a>
                        <a class="dropdown-item" href="../forget_password.php">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../include/logout.php?id='.$_SESSION['user_id'].'">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--end nav bar-->
