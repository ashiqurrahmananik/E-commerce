<?php 
  session_start();
  include "lib/connection.php";

  $id="";
  $prod = "SELECT DISTINCT catagory as categoria FROM product";
  $categories = $conn->query($prod);



  if(isset($_SESSION['userid'])){
    $id=$_SESSION['userid'];
  }
 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);

 $total=0;
 if (mysqli_num_rows($result) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
     $total++;
   }
 }


 $sql = "SELECT * FROM product";
 $result = $conn -> query ($sql);
 $message = '';
 if(isset($_POST['add_to_cart'])){

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
  $user_id=$_POST['user_id'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_id = $_POST['product_id'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");

  if(mysqli_num_rows($select_cart) > 0){
     $message = 'O produto já foi adicionado ao carriho';

  }else{
     $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
    $message = 'Produto adicionado com sucesso';
    header('location: index.php');
  }




 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja Fashion</title>
	<meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="author" content="Osvaldo Victor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <!--font-family: 'Raleway', sans-serif;-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="favicon" type="text/css" href="#favicon">
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="Ionicons/css/ionicons.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand me-12" href="index.php">Loja Fashion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Clothing.php"> Produtos </a>
      </li>
      <li class="nav-item">
      <a class="nav-link"  href="https://globo-f.blogspot.com">Blogue</a>
      </li>
      <li class="nav-item">
      <a class="nav-link"  href="contact.php">Contacto</a>
      </li>

      <?php 
if(isset($_SESSION['auth'])):
   if($_SESSION['auth']==1):
    ?>
  <li class="nav-item">  <a class="nav-link" href="profile.php"> Meus Pedidos </a> </li>
 <?php
   endif;
else:

?>
 <li class="nav-item"> <a  class="nav-link"  href="login.php">Entrar</a> </li>
 <li class="nav-item"> <a  class="nav-link"  href="Register.php">Registrar</a> </li>
<?php
endif;
?>
<li class="nav-item">
      <a href="cart(1).php" class="nav-link"><img src="img/cart.png"><?php echo $total?></a>
      </li>
    <li  class="nav-item">
      <?php
    if(isset($_SESSION['auth'])):
   if($_SESSION['auth']==1): 
    ?>

  <li class="nav-item">  <a class="nav-link" href="logout.php"> Sair </a> </li>
  <a class="nav-link btn-sm btn btn-secondary">
  <?php echo $_SESSION['username']; ?>
  </a>
    <?php
    endif;
  endif;
    ?>
    </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search(1).php" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" name="name">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>

  </div>
</nav>
<!--nav end--->