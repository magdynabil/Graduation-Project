<?php
include_once("../../include/connect.php");
include_once("../../include/function.php");

session_start();
include_once("../header.php");
include_once("../side_bar.php");
if (isset($_GET['id'])){
    $service_view=mysqli_query($connect,"select * FROM `post`WHERE servise_id= $_GET[id]");
    $service=mysqli_fetch_assoc($service_view);
}
?>
<div class="col-sm-9 "style="padding-top: 30px">
        <div class="col-md-12">
            <div class="row">

                <div class="card" style="width: 100%">
                    <img src="../<?php echo $service['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b class="text-warning"> <?php echo $service['titile']?></b></h5>
                        <p class="card-text"><?php echo $service['servise']?> <hr> <?php echo $service['location']?> </p>
                        <footer class="blockquote-footer">open at <span class="text-warning"><?php echo $service['start']?></span> <cite title="Source Title">closed at <span class="text-warning"><?php echo $service['close']?></span> </cite></footer>
                        <a href="../add_new_service.php" class="btn btn-warning text-light font-weight-bold float-md-right ">add your rate</a>
                    </div>
                    <div>
                        <?php
                        include_once('index.php');
                        ?>
                    </div>
                </div>