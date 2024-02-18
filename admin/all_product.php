<?php
SESSION_START();

if(isset($_SESSION['autor']))
{
   if($_SESSION['autor']!=1)
   {
       header("location:login.php");
   }
}
else
{
   header("location:login.php");
}
 include'header.php';
 include'lib/connection.php';

 $sql = "SELECT * FROM product";
 $result = $conn -> query ($sql);

 if(isset($_POST['update_update_btn'])){
  $name = $_POST['update_name'];
  $catagory = $_POST['update_catagory'];
  $quantity = $_POST['update_quantity'];
  $price = $_POST['update_Price'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `product` SET quantity = '$quantity' , name='$name' , catagory='$catagory' ,price='$price'  WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:all_product.php');
  };
};

 if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `product` WHERE id = '$remove_id'");
  header('location:all_product.php');
};
?>


<div class="container pendingbody">
  <h5>Todos os Produtos</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>

      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
      <th scope="col">Acção</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
    <tr>
      <td><img src="product_img/<?php echo $row['imgname']; ?>" style="width:50px;"></td>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="update_id"  value="<?php echo  $row['id']; ?>" >
        <td><input type="text" name="update_name"  value="<?php echo $row['name']; ?>" ></td>
        <td><input type="text" name="update_catagory"  value="<?php echo $row['catagory']; ?>" ></td>

        <td><input type="number" name="update_quantity"  value="<?php echo $row['quantity']; ?>" ></td>
        <td> <input type="number" name="update_Price" value="<?php echo $row['Price']; ?>" ></td>
        <td> <input type="submit" class="btn btn-sm btn-primary" value="update" name="update_update_btn">
      </form></td>
      <td><a class="btn btn-sm btn-danger" href="all_product.php?remove=<?php echo $row['id']; ?>">remove</a></td>
    </tr>
    <?php 
    }
        } 
        else 
            echo "0 results";
        ?>
  </tbody>
</table>



</div>
    
<?php
include_once 'footer.php'
?>