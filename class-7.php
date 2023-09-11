<?php
session_start();

include './contoroler/env.php';
$select_table = "SELECT * FROM hw8";
$ex_s = mysqli_query($dbcon,$select_table);
$pots = mysqli_fetch_all($ex_s,1 );
// echo "<pre>";
// print_r ($pots);
// foreach($pots as $value){
// //    print_r($value) ;
//    echo $value['id'];
// //    var_dump($value);
// }
// echo count($pots);
// echo "</pre>";
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

    <div class="container-fluid m-0 p-0">
        <!-- <h1 class="text-center bg-primary my-0 py-0">Form validation  system</h1> -->
        <div class="row">
            <div class="col-md-6 mt-0 py-0">
                <div class="card bg-primary ">
                    <form action="./contoroler/control.php" class="form-control bg-dark" method="POST">
                        <input value="<?=isset($_SESSION['valu_item']['title'])?$_SESSION['valu_item']['title'] :'' ?>"
                            name="title" class="my-2" type="text" placeholder="Enter your post title"><br>

                        <?php
                    if(isset($_SESSION['erroritem']['title'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['title']?> </span><br>
                        <?php }
                    
                    ?>
                        <input value="<?= isset($_SESSION['valu_item']['name'])?$_SESSION['valu_item']['name'] : ''  ?>"
                            name="name" class="my-2" type="text" placeholder="Enter your name"><br>
                        <?php
                    if(isset($_SESSION['erroritem']['name'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['name']?> </span><br>
                        <?php }
                    
                    ?>

                        <!-- <input name="comment" type="text"> -->
                        <input
                            value="<?= isset( $_SESSION['valu_item']['comment'])? $_SESSION['valu_item']['comment'] : '' ?>"
                            type="text" name="comment" placeholder=" Enter ditals"><br>



                        <?php
                    if(isset($_SESSION['erroritem']['comment'])){ ?>

                        <span class="text-danger"><?=$_SESSION['erroritem']['comment']?> </span><br>
                        <?php }
                    
                    ?>
                        <input name="submit" class="my-2 btn btn-primary" type="submit">

                    </form>


                </div>
            </div>
            <div class="col-md-6">
                <table class=" table">

                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Details</th>

                    </tr>

                    <tbody>
                        <?php 

                      if(count($pots)){

                        $id = 1;
                        foreach($pots as $value){?>
 
                     
 
                         <tr>
                           <td><?= $id++ ?></td>
                           <td><?= $value['title'] ?></td>





                           <td class="text-center">
                           <p><?= $value['name'] ?></p>
                            <img  src="https://api.dicebear.com/7.x/big-ears/svg?seed=<?= $value['name'] ?>" alt="">
                            
                        </td>






                         








                          <td><?= strlen($value['detrails'])>10 ? substr($value['detrails'],0,10) :$value['detrails'] ?></td>


                          <td><a href="./contoroler/show.php?id=<?= $value['id']?>"><button class="btn btn-primary">show</button></a></td>
                          <!-- edit button -->
                          <td><a href="./contoroler/edite.php?id=<?= $value['id']?>"><button class=" btn btn-danger">Edit</button></a></td>

                          <td><a href="./contoroler/delet.php?id=<?= $value['id'] ?>"><button class=" btn btn-dark">Delete</button></a></td>
                       </tr>
                       
 
 
                     <?php }




                      }else{ ?>
                      <tr class="text-center" >
                        <td colspan="4" >Data not pount 🤣</td>
                    </tr>




                    <?php  }

                    ?>
                      
                     

                    </tbody>

                </table>
            </div>
        </div>
    </div>

<!-- api link -->
<!-- https://api.dicebear.com/7.x/initials/svg?seed=shovo -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>

<?php
session_unset();
?>