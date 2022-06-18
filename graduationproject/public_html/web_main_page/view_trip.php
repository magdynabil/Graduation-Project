<?php
namespace m;
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
include_once("include/side_bar_car.php");
if (isset($_GET['id'])){
    $service_view=mysqli_query($connect,"select * FROM `car`WHERE car_id= $_GET[id]");
    $service=mysqli_fetch_assoc($service_view);
    $v=$service['Available_places'];
    $d=$service['When_to_move'];
    $trip_date=date('Y-m-d');
    if ($trip_date > $d){
        echo '<div class="alert alert-danger text-center d-block" role="alert">trip is moved on'. $d.' !</div>';
        $del=mysqli_query($connect,"DELETE  FROM `car`WHERE car_id= $_GET[id]");
        echo'<meta http-equiv="refresh" content="2;\'carpooling.php\'"/>';
    }

    elseif (isset($_POST['book'])) {
       if($v >0){
           $s=--$v;
           $up=mysqli_query($connect,"UPDATE `car` SET `Available_places`='$s' WHERE  car_id= $_GET[id] ");
           if(isset($up)) {
               echo '<div class="alert alert-success" role="alert"> sucssesful book </div>';
               echo'<meta http-equiv="refresh" content="2;\'Carpooling.php\'"/>';
           }
       }
       else{ echo '<div class="alert alert-danger text-center d-block" role="alert">sorry no avalible plase'. $d.' !</div>';
           $del=mysqli_query($connect,"DELETE FROM `car`WHERE car_id= $_GET[id]");}
       }
    else{
        echo '<div class="col-sm-9 "style="padding-top: 30px">
    <div class="col-md-12">
        <div class="row">

            <div class="card" style="width: 100%">
                <img src="../'.$service['car_image'].'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b class="text-warning"> <span class="text-dark">car number </span>  '.$service['car_number'].'</b></h5>
                    <h5 class="card-text"><span class="text-dark"> phone number</span> <b class="text-warning">'. $service['phone_number'].'</b> <hr> </h5>
                    <footer class="blockquote-footer font-weight-bold">When to move <span class="text-warning">'.$service['When_to_move'].'</span> <cite title="Source Title"> at <span class="text-warning"> '.$service['move_time'].'</span> </cite></footer>
                    <footer class="blockquote-footer font-weight-bold">Available_places <span class="text-warning">'.$service['Available_places'].'</span>  </cite></footer>
                    <form action="" method="post">
                        <button type="book" name="book" class="btn btn-warning text-light font-weight-bold float-md-right ">Book your place in the car</>
                     </form>
                </div>

            </div>';
    }

}
?>
