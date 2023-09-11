<?php
include './env.php';
session_start();
$id = $_REQUEST['id'];
$selet = "SELECT * FROM hw8 WHERE id = '$id' ";
$quary_ex = mysqli_query($dbcon,$selet);

$select_array = mysqli_fetch_assoc($quary_ex);

$_SESSION['id']=$id;





?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
                <h1>Your Post</h1>
                <form  action="./update.php" class="form-control" method="get">
                <!-- <input type="hidden" name="id" value="<?= $post['id'] ?>"> -->
                    <input name="title" type="text" value="<?=$select_array['title'] ?>" class="form-control my-2">

                    <?php
                    if(isset($_SESSION['erroritem']['title'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['title']?> </span><br>
                        <?php }
                    
                    ?>
                       

                    <input name="name" type="text" value="<?=$select_array['name'] ?>" class="form-control my-2">

                    <?php
                    if(isset($_SESSION['erroritem']['name'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['name']?> </span><br>
                        <?php }
                    
                    ?>

                    <input name="detrails" type="text" value="<?=$select_array['detrails'] ?>" class="form-control my-2">

                    <?php
                    if(isset($_SESSION['erroritem']['detrails'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['detrails']?> </span><br>
                        <?php }
                    
                    ?>

                    <a href=""><button name="update" class=" btn btn-primary">update</button></a>
                </form>
               


            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>