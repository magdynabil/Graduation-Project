<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
include_once("include/side_bar_car.php");
$msg='';
$start_station='';
$Arrival_station='';
if(isset($_POST['search'])) {
    $start_station=$_POST['start_station'];
    $Arrival_station=$_POST['Arrival_station'];
    if (empty($start_station)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty start_station !</div>';
    }
    if (empty($Arrival_station)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty Arrival_station !</div>';
    }

}
?>



<div class="col-sm-9" style="margin-top: 30px; margin-left:0px; margin-right: 0px">
    <div class="row">

        <div class="col-sm-12">
            <?php echo $msg;?>
            <div class="card text-dark">
                <div class="card-header bg-info text-center text-light">
                    <b> find your trip</b>
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <div class="form-group row  mx-sm-3 mb-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Start Station</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="start_station" name="start_station" placeholder="service tittle">
                            </div>
                            </div>
                        <div class="form-group row  mx-sm-3 mb-2">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Arrival Station</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="Arrival_station" name="Arrival_station" placeholder="service tittle">
                            </div>
                        </div>
                        <div class="form-group row mx-sm-3 mb-2 ">
                            <button type="submit" name="search" class="btn btn-danger  btn-block ">search</button>
                        </div>



                    </form>

                </div>
            </div>
        </div>


    </div>

    <div class="col-md-12"style="margin-top: 10px ;margin-bottom: 10px" >
        <div class="card border-success">
            <div class="card-header bg-success text-light">
                <b>All trip </b>
            </div>
            <div class="card-body">
                <div class="row">
                    <?Php
                    $car=mysqli_query($connect,"SELECT * FROM car where `start_station` ='$start_station' AND `Arrival_station` ='$Arrival_station'");
                    $num=1;
                    while($cars=mysqli_fetch_assoc($car)){
                        echo'
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="   border: 1px solid gray; border-radius: 10px; margin-bottom:30px;padding: 0px ;">
               
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
							<span class=" text-dark">'.$cars['car_discribtion'] .'</span>
						</div>
						<div STYLE="margin-bottom: 10px">
						<a href="view_trip.php?id='.$cars['car_id'].'"  class="btn btn-warning btn-sm">View service</a>
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
</div>

<?php
include_once("include/footer.php");
?>
