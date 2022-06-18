
<?PHP
session_start();
include_once("include/header.php");
include_once("include/connect.php");

include_once("include/side_bar_car.php");
$msg='';
$car_number='';
$car_description ='';
$When_to_move='';
$move_time='';
$start_station='';
$Arrival_station='';
$Available_places='';
$phone_number='';
$date=date("Y-M-d");
if (isset($_POST['Add_trip'])){
    $car_number=strip_tags($_POST['car_number']);
    $car_description=$_POST['car_discribtion'];
    $When_to_move=$_POST['When_to_move'];
    $move_time=$_POST['move_time'];
    $start_station=$_POST['start_station'];
    $Arrival_station=$_POST['Arrival_station'];
    $Available_places=$_POST['Available_places'];
    $phone_number=$_POST['phone_number'];
    if (empty($car_number)){
        $msg='<div class="alert alert-danger text-center" role="alert">empty car number !</div>';

    } if (empty($phone_number)){
        $msg='<div class="alert alert-danger text-center" role="alert">empty phone number !</div>';

    }
    elseif (empty($car_description)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty discribtion !</div>';
    }
    elseif (empty($When_to_move)) {
        $msg='<div class="alert alert-danger text-center" role="alert"> When_to_move !</div>';
    }
    elseif (empty($move_time)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty move_time !</div>';
    }
    elseif (empty($start_station)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty start_station !</div>';
    }
    elseif (empty( $Arrival_station)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty  Arrival_station !</div>';
    }
    elseif (empty( $Available_places)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty  Available_places !</div>';
    }

    else{

        $picture=$_FILES['car_image'];
        $picture_name=$picture['name'];
        $picture_tmp_name=$picture['tmp_name'];
        $picture_error=$picture['error'];
        $picture_size=$picture['size'];
        if ( $picture_name!=''){
            $picture_type_u=explode('.',$picture_name);
            $picture_type=strtolower(end($picture_type_u));
            $allow=array('png','jpg','gif','jpeg');
            if(in_array($picture_type,$allow)){
                if( $picture_error==0){
                    if($picture_size<=30000000){
                        $picture_new_name=uniqid('post',false).".".$picture_type;
                        $picture_dir='../img/car/'.$picture_new_name;
                        $picture_DB_dir='img/car/'.$picture_new_name;
                        if(move_uploaded_file($picture_tmp_name,$picture_dir)){
                            $insert=mysqli_query($connect,"INSERT INTO `car`(`car_number`,`phone_number`, `car_discribtion`, `When_to_move`, `move_time`, `start_station`, `Arrival_station`, `Available_places`, `car_image`, `trip_add_date`,`auther`) 
                                                                             VALUES('$car_number',$phone_number,'$car_description','$When_to_move','$move_time','$start_station','$Arrival_station','$Available_places','$picture_DB_dir','$date','$_SESSION[user_id]')");
                            if (isset($insert)){
                                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                                echo'<meta http-equiv="refresh" content="2;\'Carpooling.php\'"/>';
                            }
                        }else{$msg='<div class="alert alert-danger" role="alert">An error occurred while transferring the image! </div>';}
                    }else{$msg='<div class="alert alert-danger" role="alert">The image is larger than the allowable size! </div>';}
                }else{$msg='<div class="alert alert-danger" role="alert">An unexpected error occurred! </div>';}


            }else{$msg='<div class="alert alert-danger" role="alert">This file is not an image! </div>';}

        }

        else{
            $insert=mysqli_query($connect,"INSERT INTO `car`(`car_number`,`phone_number`, `car_discribtion`, `When_to_move`, `move_time`, `start_station`, `Arrival_station`, `Available_places`, `car_image`, `trip_add_date`,`auther`) 
                                                                             VALUES('$car_number','$car_description','$When_to_move','$move_time','$start_station','$Arrival_station','$Available_places','$date','$_SESSION[user_id]')");
            if (isset($insert)){
                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                echo'<meta http-equiv="refresh" content="2;\'carpooling.php\'"/>';
            }

        }
    }
}

?>
<div class="col-sm-9" style="margin-top: 30px; margin-left:0px; margin-right: 0px">
    <div class="row">
        <div class="col-sm-1"> </div>
        <div class="col-sm-10">
            <?php
            echo $msg ;
            ?>
            <div class="card">
                <div class="card-header bg-info text-center text-dark">
                    <b> Add New trip</b>
                </div>
                <div class="card-body text-dark">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">car number</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="title" name="car_number" value="<?php echo $car_number;?>" placeholder="car number">
                            </div>
                        </div><div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">phone number</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="title" name="phone_number" value="<?php echo $phone_number;?>" placeholder="phone number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post" class="col-sm-2 col-form-label">car discribtion </label>
                            <div class="col-sm-10">
                                <textarea class="form-control"id="full-featured-non-premium" name="car_discribtion" <?php echo $car_description;?> rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">When to move</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="start" name="When_to_move" value="<?php echo $When_to_move;?>" placeholder="When to move">
                            </div>
                        </div>  <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label"> move time</label>
                            <div class="col-sm-4">
                                <input type="time" class="form-control" id="move_time" name="move_time" value="<?php echo $move_time;?>" placeholder="move time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">start station</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="start_station" name="start_station" value="<?php echo $start_station;?>" placeholder="start station">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">Arrival station</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Arrival_station" name="Arrival_station" value="<?php echo $Arrival_station;?>" placeholder="Arrival station">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">Available places</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="Available_places" name="Available_places" value="<?php echo $Available_places;?>" placeholder="Available places">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">car image </label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control-file" id="img" name="car_image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 "> </div>
                            <div class="col-sm-10 ">
                                <button type="submit" name="Add_trip" class="btn btn-danger">Add trip</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
</div>
</div>
<?PHP
include_once("include/footer.php");
?>