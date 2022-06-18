<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
include_once("include/side_bar.php");
$msg='';
$get_user=mysqli_query($connect,"SELECT  `user_name`, `email`,`picture` FROM `sin_up` WHERE user_id='$_SESSION[user_id]'");
 $user=mysqli_fetch_assoc($get_user);
 $posts=mysqli_query($connect,"SELECT * from post");
$post=mysqli_num_rows($posts);
$users=mysqli_query($connect,"SELECT * from sin_up");
$use=mysqli_num_rows($users);
if (isset($_GET['delete'])){
    $del=mysqli_query($connect,"DELETE FROM `post`WHERE servise_id= $_GET[delete]");
    if (isset( $del)){
        $msg='<div class="container text-center"><div class="alert alert-success" role="alert">post is deleted</div></div>';
    }
}
?>
    <div class="col-sm-9 "style="padding-top: 30px">
        <div class="col-md-12">
            <div class="row">

                <div class="card text-dark" style="width: 100%">
                    <img src="../img/home/service.jpg"style="max-width: 100% ;min-height: 300px; max-height: 300px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><b> we have <span class="text-warning">  <?php echo  $post;?> </span> service on site</b></h5>
                        <p class="card-text text-dark">You can earn money by adding your service for others to use</p>
                        <a href="add_new_service.php" class="btn btn-warning text-light font-weight-bold float-md-right ">Add your service</a>
                    </div>
                </div>

                <div class="col-md-12"style="margin-top: 10px ;margin-bottom: 10px" >
                    <div class="card border-success">
                        <div class="card-header bg-success text-light">
                            <b> New service </b>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <?Php
                            echo $msg;
                            ?>

                                <?Php
                                $posts=mysqli_query($connect,"SELECT * FROM post p INNER JOIN sin_up r where p.author =r.user_id order by servise_id desc limit 30");
                                $num=1;
                                while($post=mysqli_fetch_assoc($posts)){
                                    echo'

 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="   border: 1px solid gray; border-radius: 10px;margin-bottom:30px; padding: 0px ;">
               
					<div class="box-part text-center">
                        
                        <img src="../'.($post['image'] == ''?'img/no-img.jpg':$post['image']).'"class="rounded" width="100%"/>
                        
						<div class="title">
							<h4 class="text-dark">'.substr($post['titile'],0,40).'</h4>
							<span class="text-warning d-block">service owner: '.$post['user_name'].'   </span>
							<span   class="d-block" style="color: #4e555b;font-size: small "> date of publication: '.$post['servise_date'].'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> start time : '.$post['start'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> close time : '.$post['close'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> location : '.$post['location'] .'</span>
						</div>
                        
						<div class="text">
							<span class="text-dark">'.$post['servise'] .'</span>
						</div>
						<div STYLE="margin-bottom: 10px">
						<a href="view_service.php?id='.$post['servise_id'].'"  class="btn btn-info  btn-sm">View service</a>';
                                    if ($post['user_id']==$_SESSION['user_id']){
                                        echo '
						<a href="modfi_service.php?post='.$post['servise_id'].'" class="btn btn-warning  btn-sm">Modify</a>
						<a  href="Services.php?delete='.$post['servise_id'].'" class="btn btn-danger btn-sm">Delete</a>
                                     ';   }
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
