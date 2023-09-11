<?php
include './env.php';
session_start();
$id = $_REQUEST['id'];
$selet = "DELETE  FROM hw8 WHERE id = '$id' ";
$quary_ex = mysqli_query($dbcon,$selet);

if($quary_ex ==true){
    header("location:../class-7.php");

}






?>