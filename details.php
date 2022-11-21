<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php include './partials/connect.php' ?>
    <?php include './partials/header.php' ?>

    <?php

    $id = $_GET['details_id'];
    $sql = "Select * from `cloths` where category_id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $category_id = $row['category_id'];
    $category_name = $row['category_name'];
    $category_desc = $row['category_desc'];
    $category_price = $row['category_price'];
    $category_image = $row['category_image'];


    ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center text-primary"><?php echo $category_name ?></h1>
            <p class="lead"><?php echo $category_desc ?></p>
            <hr class="my-4">
            <button class="btn btn-dark">
                <a class="btn btn-dark" href="index.php" role="button">Continue Shopping</a>
            </button>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src=<?php echo $category_image ?> class="container-fluid" alt="" style="height: 500px; object-fit:contain;">
            </div>    
            <div class="col-lg-6 col-sm-12">
                <h2 class="text-center text-danger">
                    <?php  echo $category_name ?>
                </h2>
                <p class="lead"><?php echo $category_desc ?></p>
                <p class="lead"><strong>Price: </strong><?php echo $category_price ?>/-</p>
                <button class="btn btn-success">Add to Cart</button>
            </div>
        </div>
    </div>

</body>

</html>