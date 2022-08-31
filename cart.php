<?php
 include'header.php';
 include'lib/connection.php';


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
$id=$_SESSION['userid'];
 $sql = "SELECT * FROM cart where userid='$id'";
 $result = $conn -> query ($sql);

 if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:cart.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
  header('location:cart.php');
};


?>

<div class="container pendingbody">
  <h5>cart</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <?php
  $total=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["name"] ?></td>
  
      <td><form action="" method="post">
        <input type="hidden" name="update_quantity_id"  value="<?php echo  $row['id']; ?>" >
        <input type="number" name="update_quantity" min="1"  value="<?php echo $row['quantity']; ?>" >
        <input type="submit" value="update" name="update_update_btn">
      </form></td> 
      <td><?php echo $row["price"]*$row["quantity"]  ?></td>
      <?php $total=$total+$row["price"]*$row["quantity"] ;?>
      <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid']; ?>">
      <input type="hidden" name="user_name" value="<?php echo $_SESSION['username']; ?>">  
      <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
      <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
      <input type="hidden" name="status" value="pending">   
      <td><a href="cart.php?remove=<?php echo $row['id']; ?>">remove</a></td>
    </tr>
    <?php 
    }
    echo "total=" . $total;
        } 
        else 
            echo "0 results";
        ?>
        <h5>Only cash on Delivery</h5>
      <div class="input-group form-group">
        <input type="text" class="form-control" placeholder="Name" name="Name">
       </div>
      <div class="input-group form-group">
        <input type="text" class="form-control" placeholder="Address" name="address">
       </div>
       <div class="input-group form-group">
        <input type="number" class="form-control" placeholder="Phone Number" name="number">
       </div>

      <div class="form-group">
      <input type="submit" value="Order Now" class="btn btn-primary" name="order_btn">
    </div>

    </form>
  </tbody>
</table>
</div>


<?php
 include'footer.php';
?>