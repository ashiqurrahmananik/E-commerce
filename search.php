<?php
 include 'header.php';
 include 'lib/connection.php';
 $name=$_POST['name'];
 $sql = "SELECT * FROM product where name='$name'";
 $result = $conn -> query ($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca por Produto</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>

<div class="container pendingbody">
  <h5 class="bg-info py-4 px-4">Resultados da Busca</h5>
  <div class="container">
   <div class="row">
   <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col-md-3 col-sm-6 col-6">
              <div>
                <img src="admin/product_img/<?php echo $row['imgname']; ?>"  width="" height="300" style="vertical-align:left" >
                <!-- <img src="smiley.gif" alt="Smiley face" width="42" height="42" style="vertical-align:middle"> -->
              </div>
              <div>
              <div>
                <h6><?php echo $row["name"] ?></h6> 
                <span><?php echo $row["Price"];?> kz</span> 
                <input type="hidden" name="user_id" value="<?php 
                if(isset($_SESSION['userid'])){
                  echo  $_SESSION['userid'];
                }else{
                  echo 0;
                }
                ?>" >
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">              
              </div>
              <input type="submit" class="btn btn btn-primary" value="Adicionar" name="add_to_cart">
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