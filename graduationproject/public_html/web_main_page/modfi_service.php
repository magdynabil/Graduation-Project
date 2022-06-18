
<?PHP
session_start();
include_once("include/header.php");
include_once("include/connect.php");

include_once("include/side_bar.php");
$msg='';
$title='';
$servise='';
$start='';
$close='';
$location='';
$date=date("Y-M-d");
if (isset($_POST['add_post'])){
    $title=strip_tags($_POST['title']);
    $servise=$_POST['servise'];
    $start=$_POST['start'];
    $close=$_POST['close'];
    $location=$_POST['location'];
    if (empty($title)){
        $msg='<div class="alert alert-danger text-center" role="alert">empty title !</div>';

    }
    elseif (empty($servise)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty discribtion !</div>';
    }

    else{

        $picture=$_FILES['img'];
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
                        $picture_dir='../img/post/'.$picture_new_name;
                        $picture_DB_dir='img/post/'.$picture_new_name;
                        if(move_uploaded_file($picture_tmp_name,$picture_dir)){
                            $insert=mysqli_query($connect,"
                                   UPDATE `post` SET `titile`='$title',`servise`='$servise',`start`='$start',`close`='$close',`location`='$location', `image`='$picture_DB_dir'
                                           WHERE `servise_id` ='".$_GET["post"]."'");

                            if (isset($insert)){
                                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                                echo'<meta http-equiv="refresh" content="2;\'Services.php\'"/>';
                            }
                        }else{$msg='<div class="alert alert-danger" role="alert">An error occurred while transferring the image! </div>';}
                    }else{$msg='<div class="alert alert-danger" role="alert">The image is larger than the allowable size! </div>';}
                }else{$msg='<div class="alert alert-danger" role="alert">An unexpected error occurred! </div>';}


            }else{$msg='<div class="alert alert-danger" role="alert">This file is not an image! </div>';}

        }

        else{
            $insert=mysqli_query($connect,"
                                   UPDATE `post` SET `titile`='$title',`servise`='$servise',`start`='$start',`close`='$close',`location`='$location'
                                           WHERE `servise_id` ='".$_GET["post"]."'");
            if (isset($insert)){
                $msg='<div class="alert alert-success" role="alert"> sucssesful added </div>';
                echo'<meta http-equiv="refresh" content="2;\'Services.php\'"/>';
            }

        }
    }
}
$get_post=mysqli_query($connect,"SELECT * FROM post WHERE servise_id='$_GET[post]'");
$post=mysqli_fetch_assoc( $get_post);
?>
<div class="col-sm-9" style="margin-top: 30px; margin-left:0px; margin-right: 0px">
    <div class="row">
        <div class="col-sm-1"> </div>
        <div class="col-sm-10">
            <?php
            echo $msg ;
            ?>
            <div class="card text-dark">
                <div class="card-header bg-info text-center text-light">
                    <b> Modify <?php echo $post['titile']; ?> service</b>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Services title</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['titile']; ?>" placeholder="Services title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="post" class="col-sm-2 col-form-label">Services discribtion </label>
                            <div class="col-sm-10">
                                <textarea class="form-control"id="full-featured-non-premium" name="servise" <?php echo $post['servise']; ?> rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">start time</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="start" name="start" value="<?php echo $post['start']; ?>" placeholder="start time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">close time</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="close" name="close" value="<?php echo $post['close']; ?>" placeholder="close time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">location</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="location" name="location" value="<?php echo $post['location']; ?>" placeholder="location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img" class="col-sm-2 col-form-label">Example file input</label>
                            <div class="col-sm-5">
                                <input type="file" class="form-control-file" id="img" name="img">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 "> </div>
                            <div class="col-sm-10 ">
                                <button type="submit" name="add_post" class="btn btn-danger">Modify Services</button>
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