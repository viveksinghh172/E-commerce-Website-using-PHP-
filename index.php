<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <!-- Bootstrap css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <?php include './partials/connect.php' ?>
  <?php include './partials/header.php' ?>

  <h1 class="text-center text-primary my-3">Welcome to Our Store</h1>
  <h1 class="text-center text-success mb-4">Shop by Category</h1>

  <div class="container">

    <div class="row">

    <!-- Php code -->

    <?php
    $sql = "Select * from `cloths`";
    $result = mysqli_query($con,$sql);
    if($result){
      // $row=mysqli_fetch_assoc($result);
      // echo $row['category_name'];
      while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_name=$row['category_name'];
        $category_desc=$row['category_desc'];
        $category_price=$row['category_price'];
        $category_image=$row['category_image'];
        echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-5">
        <div class="card">
          <img src='.$category_image.' style="height: 300px; object-fit:contain;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$category_name.'</h5>
            <p class="card-text">'.substr($category_desc,0,53).'.....</p>
            <p class="card-text">'.$category_price.'/-</p>
            <a href="details.php?details_id='.$category_id.'" class="btn btn-primary">Shop Now</a>
          </div>
       </div> 
      </div>';
      }
    }
    ?>

      
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>