<?php
include_once ('../../include/connect.php');

    if($_POST['act'] == 'rate'){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

    	$query =mysqli_query($connect,"SELECT * FROM star where ip= '$ip' ");
    	while($data = mysqli_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysqli_query($connect,"INSERT INTO star (id_post, ip, rate)VALUES('$thepost', '$ip', '$therate')");
    	}else{
    		mysqli_query($connect,"UPDATE star SET rate= '$therate' WHERE ip = '$ip'");
    	}
    } 
?>