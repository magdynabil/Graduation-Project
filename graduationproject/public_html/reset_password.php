
<?php

$errors = array();
$url = $_SERVER['QUERY_STRING'];

if(isset($_POST['submit']))
{
    $db=mysqli_connect("Localhost","root","","gradution_project");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // receive all input values from the form

    parse_str($url); 
    
    
	$password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($password))
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Password is required</div>');
	}
    $query = mysqli_query($db,"SELECT * FROM sin_up WHERE `email` ='$email'")
    or die(mysqli_error($db)); 

    if (mysqli_num_rows ($query)==1)
    {
        $password = md5($password);
        $query3 = mysqli_query($db,"UPDATE sin_up SET `password`='$password' WHERE `email` ='$email'")
        or die(mysqli_error($db));

        echo  '<div class="text-center"><div class="alert alert-success" role="alert">Password Changed </div> </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-doc.css">
    <link href='https://fonts.googleapis.com/css?family=Bayon|Francois+One' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">

</head>
<body>
    <script>
 function f1() { window.open("index.php")} 
</script>
      <!-- Material form register -->
      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-md-4 mt-3 rounded ">
                <div class="card  ">
                    <h5 class="card-header bg-info info-color white-text text-center py-4">
                        <strong class="text-dark">New Password</strong>
                    </h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" method="POST " style="margin-top: 20px;">
                        <?php include('errors.php'); ?>
                            <div class="form-row">
                                <div class="col">

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                            </div>
                            <!-- Sign up button -->
                                    
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " onclick="f1();"  name="submit">Sign Up</button>

                           
        
 <!-- Form -->
    </div>
    </div>
    </form>
<!-- Material form register -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>