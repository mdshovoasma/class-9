<?php
session_start();
include "./env.php";
// $_REQUEST['title'];
$all_eror=[];
// $title1='';
// $name1='';
// $comment1='';


if(isset($_REQUEST['submit'])){
    $title = $_REQUEST['title'];
    $name = $_REQUEST['name'];
    $comment = $_REQUEST['comment'];

};
if(empty($title)){
$all_eror['title'] = "Enter your title";
}else if(strlen($title)>10){
    $all_eror['title'] = "Enter 10 carector of length";
}

if(empty($name)){
    $all_eror['name'] = "Enter your name";

}
if(empty($comment)){
    $all_eror['comment'] = "Enter your comment";

}



if(count($all_eror)>0){
    $_SESSION['valu_item']=$_REQUEST;
  
 

    $_SESSION['erroritem']=$all_eror;
    
    header('location:../class-7.php');

}
else{

    $select_q = "INSERT INTO hw8 (title,name,detrails) VALUES 
    ('$title','$name','$comment')";
   $ex = mysqli_query($dbcon,$select_q);
   if( $ex){
   header("location:../class-7.php");

   }else{
    echo "not success";
   }

    // header('location:post.php');
};





?>