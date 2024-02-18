<?php
 include 'header.php';
 include 'lib/connection.php';

 $user_id=$_POST['user_id'];
 $product_name = $_POST['product_name'];
 $product_price = $_POST['product_price'];
 $product_id = $_POST['product_id'];
 $product_quantity = 1;

 $sql = "SELECT * FROM product where id='$product_id' ";
 $result = $conn -> query ($sql);
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
    
  
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productid = '$product_id'  && userid='$user_id'");
  
    if(mysqli_num_rows($select_cart) > 0){
      $message = 'Já foi Adicionado ao Carrinho';
    }
    else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(userid, productid, name, quantity, price) VALUES('$user_id', '$product_id', '$product_name', '$product_quantity', '$product_price')");
      $message = 'Produto Adicionado com Sucesso';
     
    }
  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Produtos</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>

<div class="container pendingbody">
  <h5 class="bg-info py-4 px-4">Informações do Producto</h5>
  <div class="container">
  <div class="text text-center bg-danger text-success">
  <?php
  echo $message;
  ?>
</div>
   <div class="row">
   <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="my-6" method="post">
            <div class="col-md-6 col-sm-6 col-6">
              <div>
                <img src="admin/product_img/<?php echo $row['imgname']; ?>"  width="" height="300" style="vertical-align:left" >
                     </div>
              <div>
              <div>
                <div>
                Nome : <?php echo $row["name"]; ?>
                </div>
              
                
                <div>Preço : <?php echo $row["Price"].' kz'; ?> 
                </div> 
                <h6 class="my-3 font-weigth">Descrição</h6> 
                <p>
                <?php 
                 echo $row["description"];
                ?>
                </p>
                <input type="hidden" name="user_id" value="<?php 
                if(isset($_SESSION['userid'])){
                  echo  $_SESSION['userid'];
                }else{
                  echo 0;
                }
                ?>"  >
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">              
              </div>
              <button name="add_to_cart" type="submit" class="btn btn btn-secondary" >
             <i class="ion-android-add-circle"></i>
             </button>
            </div>
              
            </div>
            </form>
            <?php 
    }
        } 
        else 
            echo "0 results";
        ?>

            
          </div>
  </div>
</div>
    
</body>
</html>
<?php 
include_once "footer.php";
?>