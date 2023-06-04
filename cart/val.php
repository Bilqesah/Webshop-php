<?php
include('../config.php');
$ID = $_GET['id'];
$up= mysqli_query($con,"select * FROM prod WHERE id=$ID");
$data= mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Sure buy product</title>
    <style>
        input{
            display:none;
        }
        .main{
            width:40%;
            padding:20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 45px;

        }
        .main h3{
            margin-bottom: 20px;

        }
       
    </style>
</head>
<body>
<?php include ('../nav.php');?>

    <center>
        <div class="main">
            <form action="insert_cart.php" method="post">
                <h3>Are You Want To Buy The Product ?</h3>
                <input type="text" name="id" value='<?php echo $data['id']?>'>
                <input type="text" name="name" value='<?php echo $data['name']?>' >
                <input type="text" name="price"value='<?php echo $data['price']?>'>
                <button name=add type="submit" class="btn btn-outline-success">YES</button>
                <a href="shop.php" class="btn btn-outline-danger">Chancel</a>

                <br>
             </form>
        </div>
        
    </center>
</body>
</html>