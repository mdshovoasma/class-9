<?php
include './env.php';
session_start();
$id = $_REQUEST['id'];
$selet = "SELECT * FROM hw8 WHERE id = '$id' ";
$quary_ex = mysqli_query($dbcon,$selet);

$select_array = mysqli_fetch_assoc($quary_ex);



if($select_array){
    print_r($select_array);

}
else{
    echo " not nfoumnt";
}
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
                <form action="../class-7.php" class="form-control">
                    <input type="text" value="<?=$select_array['title'] ?>" class="form-control my-2">
                    <input type="text" value="<?=$select_array['name'] ?>" class="form-control my-2">
                    <input type="text" value="<?=$select_array['detrails'] ?>" class="form-control my-2">
                    <a href=""><button class=" btn btn-primary">back</button></a>
                </form>
               


            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>