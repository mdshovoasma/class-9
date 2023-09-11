<?php
include './env.php';
session_start();
$a = $_SESSION['id'];

// $erorr=[];


$all_eror=[];

     $title = $_REQUEST['title'];
    $name = $_REQUEST['name'];
    $comment = $_REQUEST['detrails'];

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
            // $_SESSION['valu_item']=$_REQUEST;
          
         
        
            $_SESSION['erroritem']=$all_eror;
            // $id = $_REQUEST['id'];
            header("location:./edite.php?id=$a");
        
        }
        
         else{
            $U_select = "UPDATE hw8 SET title='$title',name='$name',detrails='$comment'WHERE id='$a'";

            $u_ex = mysqli_query($dbcon,$U_select );
            header("location:../class-7.php");

         };
        




        

?>