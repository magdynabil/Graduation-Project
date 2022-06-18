<?php
include_once("include/connect.php");
include_once("include/function.php");
session_start();
include_once("include/header.php");
if (isset($_POST['add_loss_person'])){
    $loss_com=$_POST['loss_com'];
    $loss_comm_id=$_POST['loss_comm_id'];
    $insert=mysqli_query($connect,"INSERT INTO `loss_comm`( `loss_comm_id`, `loss_com`) VALUES ('$loss_comm_id','$loss_com') ");
    echo'<meta http-equiv="refresh" content="2;\'loss_p.php\'"/>';
}
?>

<!------ Include the above in your HEAD tag ---------->

<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-3 float-left ml-0 pl-0  mt-4">
                <a href="add_loss.php" type="submit" name="add_loss_person" class="btn btn-success "><b>add lost person</b></a>
            </div>
<?Php
$loss=mysqli_query($connect,"SELECT *FROM loss order by loss_id  desc limit 100");
while($losss=mysqli_fetch_assoc($loss)) {
    $x = $losss['loss_id'];
    echo ' 
	
	    <!-- ==============================================
	    Hero
	    =============================================== -->
        <section class="hero ">
         <div class="container">
          <div class="row">	
		  
		   <div class="col-lg-6 offset-lg-3  text-dark "style="margin-bottom: 30px ;margin-top: 30px">
			
			<div class="cardbox shadow-lg bg-white "style="margin-bottom: 0px">
			 
			 <div class="cardbox-heading">
			  <!-- START dropdown-->
			  <div class="dropdown float-right">
			   <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
				<em class="fa fa-ellipsis-h"></em>
			   </button>
			   <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
				<a class="dropdown-item" href="#">name: '.$losss['name'] .'</a>
				<a class="dropdown-item" href="#">id='.$losss['loss_id'] .'</a>
				<a class="dropdown-item" href="#">date:'.$losss['date'] .'</a>
			   </div>
			  </div><!--/ dropdown -->
			   <div class="media m-0">
			   <div class="media-body">
				<small><span class="ml-3 font-weight-bold text-info font-size-10"><i class="icon ion-md-pin"></i> '.$losss['name'] .'</span></small>
				<small><span class="  font-weight-bold text-warning"><i class="icon ion-md-time"></i> '.$losss['date'] .'</span></small>
			   <p class=" text-right  text-dark">'.$losss['loss_des'] .'</p>
			   </div>
			  </div><!--/ media -->
			 </div><!--/ cardbox-heading -->
			  
			 <div class="cardbox-item">
			  <img class="img-fluid" src="../'.($losss['loss_img'] == ''?'img/no-img.jpg':$losss['loss_img']).'" alt="Image">
			 </div><!--/ cardbox-item -->
		
			 <div class="cardbox-comments mt-4 pb-4">
			 <form method="post" action="">
			  <div class="search">
			   <input    id="loss_com"name="loss_com"  placeholder="Write a comment" type="text">
			   <input  id="loss_comm_id"name="loss_comm_id" placeholder="Write a person id" type="text">
			     <button type="submit" name="add_loss_person"><i class="fas fa-paper-plane" ></i></button>
			 
			  </div><!--/. Search -->
			  </form>
			 </div><!--/ cardbox-like -->			  
			</div><!--/ cardbox -->

           </div><!--/ col-lg-6 -->	
		   <div class="col-lg-3 ">
			<div class="shadow-lg p-4 mb-2 bg-white author ">
			<p class="font-weight-bold text-warning text-center">post id='.$losss['loss_id'] .'</p>';
			$l=mysqli_query($connect,"SELECT * FROM `loss_comm` where loss_comm_id='$x'");
while($y=mysqli_fetch_assoc($l)) {
echo '<p class=" text-dark">'.$y['loss_com'].'</p>
<hr>';
}
			
			echo '</div>
		   </div><!--/ col-lg-3 -->
			
          </div><!--/ row -->
         </div><!--/ container -->
        </section> ';
}

    ?>
    </div>
</div>
    <?php

include_once("include/footer.php");
?>
