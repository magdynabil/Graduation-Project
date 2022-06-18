<?php
session_start();
include_once("include/connect.php");
include_once("include/function.php");


include_once("include/header.php");
include_once("include/side_bar.php");
?>
<div class="col-sm-9 "style="padding-top: 30px">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12"style="margin-top: 10px ;margin-bottom: 10px" >
                <div class="card border-success">
                    <div class="card-header bg-success text-dark">
                        <b> New service </b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?Php
                            $posts=mysqli_query($connect,"SELECT * FROM post p INNER JOIN sin_up r where p.author =r.user_id order by servise_id desc ");
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
