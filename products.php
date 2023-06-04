<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    
<meta charset="utf-8" />
        <title>Webshop||products</title>
    
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styled.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        h3{
            text-align: center;
    margin-top: 20px;
        }
    </style>
</head>
<body>
<div class='container'>
    <!-- navbar1 -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Webshop</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

    <h3>All Products Available</h3>
<div class="row">
<?php
include ('config.php');
$result = mysqli_query($con,"SELECT * FROM prod");

while($row = mysqli_fetch_array($result)){
    echo "

            <div class='col-sm-12 col-md-6 col-lg-3 mt-4'>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top siz' >
                    <div class='card-body'>
                     <h5 class='card-title'>$row[name]</h5>
                     <p class='card-text'>$row[price]</p>
                      <a href='delete.php? id=$row[id]' class='btn btn-outline-danger'>Delete</a>
                     <a href='update.php? id=$row[id]' class='btn btn-outline-success'>Edit</a>

                     </div>
                </div>
            </div>
        

    
   
    ";
}
?>
</div>



</div>


</body>
</html>