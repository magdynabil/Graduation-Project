<?PHP
session_start();
include_once("include/header.php");
include_once("include/connect.php");
$msg='';
$name='';
$loss_des='';
$date=date("Y-M-d");
if (isset($_POST['add_loss_person'])){
    $name=strip_tags($_POST['name']);
    $loss_des=$_POST['loss_des'];
    if (empty($name)){
        $msg='<div class="alert alert-danger text-center" role="alert">empty name !</div>';

    }
    elseif (empty($loss_des)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty discribtion !</div>';
    }

    else{

        $picture=$_FILES['loss_img'];
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
                        $picture_dir='../img/loss/'.$picture_new_name;
                        $picture_DB_dir='img/loss/'.$picture_new_name;
                        if(move_uploaded_file($picture_tmp_name,$picture_dir)){
                            $insert=mysqli_query($connect,"INSERT INTO `loss`( `name`, `loss_des`, `loss_img`, `date`) 
                                                                           VALUES ('$name','$loss_des','$picture_DB_dir','$date')");
                            if (isset($insert)){
                                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                                echo'<meta http-equiv="refresh" content="2;\'loss_p.php\'"/>';
                            }
                        }else{$msg='<div class="alert alert-danger" role="alert">An error occurred while transferring the image! </div>';}
                    }else{$msg='<div class="alert alert-danger" role="alert">The image is larger than the allowable size! </div>';}
                }else{$msg='<div class="alert alert-danger" role="alert">An unexpected error occurred! </div>';}


            }else{$msg='<div class="alert alert-danger" role="alert">This file is not an image! </div>';}

        }

        else{
            $insert=mysqli_query($connect,"INSERT INTO `loss`( `name`, `loss_des`, `date`) 
                                                                           VALUES ('$name','$loss_des' ,'$date')");
            if (isset($insert)){
                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                echo'<meta http-equiv="refresh" content="2;\'loss_p.php\'"/>';
            }

        }
    }
}

?>
    <div class="col-sm-12" style="margin-top: 30px; margin-left:0px; margin-right: 0px">
        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">
                <?php
                echo $msg ;
                ?>
                <div class="card text-dark">
                    <div class="card-header bg-info text-center text-light">
                        <b> Add loss person</b>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post" class="col-sm-2 col-form-label">discribtion </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control"id="loss_des" name="loss_des" <?php echo $loss_des;?> rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-sm-2 col-form-label">Example file input</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control-file" id="loss_img" name="loss_img">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 "> </div>
                                <div class="col-sm-10 ">
                                    <button type="submit" name="add_loss_person" class="btn btn-danger">add_loss_person</button>
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