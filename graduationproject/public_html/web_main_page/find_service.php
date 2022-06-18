<?php
include_once("include/connect.php");
include_once("include/function.php");

session_start();
include_once("include/header.php");
include_once("include/side_bar.php");
$msg='';
$title='';
if(isset($_POST['search'])) {
    $title=$_POST['title'];
    if (empty($title)) {
        $msg='<div class="alert alert-danger text-center" role="alert">empty title !</div>';
    }

}
 ?>



<div class="col-sm-9" style="margin-top: 30px; margin-left:0px; margin-right: 0px">
    <div class="row">

        <div class="col-sm-12">
           <?php echo $msg;?>
            <div class="card text-dark">
                <div class="card-header bg-info text-center text-light">
                    <b class="text-dark"> find your service</b>
                </div>
                <div class="card-body">

                    <form action="" method="post">
                    <div class="form-group row  mx-sm-3 mb-2">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-dark ">service tittle</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="title" name="title" placeholder="service tittle">
                        </div>
                        <button type="submit" name="search" class="btn btn-danger">Add Services</button>
                        </form>

                    </div>
                </div>
            </div>


        </div>

                <div class="col-md-12"style="margin-top: 10px ;margin-bottom: 10px" >
                    <div class="card border-success">
                        <div class="card-header bg-success text-light">
                            <b>All service </b>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?Php
                                $posts=mysqli_query($connect,"SELECT * FROM post where `titile` ='$title'");
                                $num=1;
                                while($post=mysqli_fetch_assoc($posts)){
                                    echo'<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"style="  margin-bottom:30px; border: 1px solid gray; border-radius: 10px; padding: 0px">
               
					<div class="box-part text-center">
                        
                        <img src="../'.($post['image'] == ''?'img/no-img.jpg':$post['image']).'"class="rounded" width="100%"/>
                        
						<div class="title">
							<h4 class="text-dark">'.substr($post['titile'],0,40).'</h4>
							<span   class="d-block" style="color: #4e555b;font-size: small "> date of publication: '.$post['servise_date'].'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> start time : '.$post['start'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> close time : '.$post['close'] .'</span>
							<span  class="d-block" style="color: #4e555b;font-size: small "> location : '.$post['location'] .'</span>
						</div>
                        
						<div class="text">
							<span class="text-dark">'.$post['servise'] .'</span>
						</div>
						<a style="margin-bottom: 10px" href="view_service.php?id='.$post['servise_id'].'"  class="btn btn-warning btn-sm">View service</a>
					 </div>
				</div>';
                                    $num++;
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

<?php
include_once("include/footer.php");
?>
