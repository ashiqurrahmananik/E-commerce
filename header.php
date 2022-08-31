<!DOCTYPE html>
<html>
<head>
	<title>Fashion</title>
	<meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="author" content="Anik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <!--font-family: 'Raleway', sans-serif;-->
    <link rel="favicon" type="text/css" href="#favicon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

<!--header start--->
  <header>
    <div class="container">
    <div class="header-top">
      
        <div class="row">
          <div class="col-md-12 text-center">
            <a href=""><img src="img/logo.png"></a>
          </div>
        </div>
    
    </div>
    </div>
  </header>
  <div class="line">

    
  </div>
<!--header end--->
<?php 
  SESSION_START();
  include "lib/connection.php";
  $id=$_SESSION['userid'];
 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);
?>
<!--nav start--->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Clothing.php"> Clothing</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="Shoes.php">Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Accessories.php"> Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Trends.php">Trends</a>
        </li>
      </ul>
      <form class="form-inline">
        <!--<a href=""><img src="img/search.png"></a>-->
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit" style="margin-left:7px;margin-right:7px;"><img src="img/search.png"></button>
        <?php
          $total=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $total++;
            }
          }
              ?>
        <a href="cart.php"><img src="img/cart.png"><?php echo $total?></a>
        <?php 

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']==1)
   {
    echo $_SESSION['username']; ?>
    <a href="logout.php">(logout)</a>
<?php
   }
}
else
{
?>
  <a href="login.php">Login</a>
  <a href="Register.php">Signup</a>
<?php
}
?>
        
      </form>
    </div>
  </div>
</nav>

<!--nav end--->