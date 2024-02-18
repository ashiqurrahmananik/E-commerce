<?php
 include'header.php';
 include'lib/connection.php';
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
$sql = "SELECT * FROM orders";
$result = $conn -> query ($sql);

if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_status'];
  $update_id = $_POST['update_id'];
  $update_quantity_query = mysqli_query($conn, "UPDATE `orders` SET status = '$update_value' WHERE id = '$update_id'");
  if($update_quantity_query){
     header('location:pending_orders.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$remove_id'");
  header('location:pending_orders.php');
};
?>
<div class="container pendingbody">
  <h5>Estado do Pedido</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Número de Transação </th>
      <th scope="col">Txid</th>
      <th scope="col">Total de Produtos</th>
      <th scope="col">Total(KZ)</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              
              ?>
    <tr>

      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td>
        <?php 
        if($row["mobnumber"] != 0):
          ?>
  <a href="http://localhost/e-commerce/admin/<?php echo $row["dir"]; ?>">Ver Comprovativo</a>
          <?php
   else:
    echo $row["mobnumber"];
        endif;
        ?>
      
      </td>
      <td><?php echo $row["txid"] ?></td>
      <td><?php echo $row["totalproduct"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
      <td><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="update_id"  value="<?php echo  $row['id']; ?>" >
        <div>
                                <select name="update_status" class="form-control">
                                <option><?php echo $row['status']; ?></option>
                                    <option value="Pending">Pendente</option>
                                    <option value="Confirmed">Confirmado</option>
                                  <option value="Cancel">Cancelado</option>
                                  <option value="Delivered">Entregue</option>
                                </select>
                            </div>
        <input class="btn btn-sm btn-primary my-2" type="submit" value="update" name="update_update_btn">
      </form></td>
      <td><a class="btn btn-sm btn-danger" href="pending_orders.php?remove=<?php echo $row['id']; ?>">remove</a></td>
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