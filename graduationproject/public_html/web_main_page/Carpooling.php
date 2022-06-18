<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
include_once("include/side_bar_car.php");
$msg="";
if (isset($_GET['delete'])){
    $del=mysqli_query($connect,"DELETE FROM `car`WHERE car_id= $_GET[delete]");
    if (isset( $del)){
        $msg='<div class="container text-center"><div class="alert alert-success" role="alert">trip is deleted</div></div>';
    }}
$car=mysqli_query($connect,"SELECT * from car");
$cars=mysqli_num_rows($car);

?>

    <div class="col-sm-9 "style="padding-top: 30px">
        <div class="col-md-12">
            <div class="row">

                <div class="card" style="width: 100%">
                    <img src="../img/slider_1.jfif"style="max-width: 100% ;min-height: 300px; max-height: 300px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><b> we have <span class="text-warning"><?php echo  $cars;?>  </span> trip on site</b></h5>
                        <p class="card-text text-dark">Here is where you can save time and money </p>
                        <a href="add_new_trip.php" class="btn btn-warning text-light font-weight-bold float-md-right ">Add your trip</a>
                    </div>
                </div>

                <div class="col-md-12"style="margin-top: 10px ;margin-bottom: 10px" >
                    <div class="card border-success">
                        <div class="card-header bg-success text-light">
                            <b> New trip </b>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <?Php
                            echo $msg;
                            ?>

                                <?Php
                            $car=mysqli_query($connect,"SELECT * FROM car p INNER JOIN sin_up r where p.auther =r.user_id order by 	car_id  desc limit 30");

                                while($cars=mysqli_fetch_assoc($car)){
                                    echo'

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="   border: 1px solid gray; border-radius: 10px;margin-bottom:30px; padding: 0px ;">
               
					<div class="box-part text-center">
                        
                        <img src="../'.($cars['car_image'] == ''?'img/no-img.jpg':$cars['car_image']).'"class="rounded" width="100%"/>
                        
						<div class="title">
							<h4 class=" text-dark"> car number : '.substr($cars['car_number'],0,11).'</h4>
							<span class="text-warning d-block">owner phone : '.substr($cars['phone_number'],0,11).'   </span>
							<span   class="d-block" style="color: #4e555b;font-size: small "> date of trip: '.$cars['When_to_move'].'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> start station : '.$cars['start_station'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> Arrival station : '.$cars['Arrival_station'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> Available places: '.$cars['Available_places'] .'</span>
						</div>
                        
						<div class="text">
							<span class=" text-dark" >'.$cars['car_discribtion'] .'</span>
						</div>
						<div STYLE="margin-bottom: 10px">
						<a href="view_trip.php?id='.$cars['car_id'].'"  class="btn btn-info  btn-sm">View trip</a> ';
                                    if ($cars['user_id']==$_SESSION['user_id']){
                                        echo '
						<a href="modify_trip.php?car_id='.$cars['car_id'].'" class="btn btn-warning  btn-sm">Modify</a>
						<a href="Carpooling.php?delete='.$cars['car_id'].'" class="btn btn-danger  btn-sm">Delete</a>';}
                                        echo '
						<div class="mb-10"></div>
					 </div>
					 </div>
				</div>';


                                }

                                ?>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                </div>
                            </div>

    <!--end panal-->


<?php
include_once("include/footer.php");
?>