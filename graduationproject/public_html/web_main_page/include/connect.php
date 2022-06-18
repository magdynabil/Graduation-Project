<?php
$host='localhost';
$root='root';
$password='';
$db_name='gradution_project';
$connect=mysqli_connect($host,$root,$password,$db_name);
function close_DB(){
    global $connect;
    mysqli_close($connect);
}

?>