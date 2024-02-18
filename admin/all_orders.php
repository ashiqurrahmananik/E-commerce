<?php
 include'header.php';
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
include'lib/connection.php';
$sql = "SELECT * FROM orders where status='delivered'";
$result = $conn -> query ($sql);
?>

<div class="container pendingbody">
  <h5>Todos os Pedidos</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telfone</th>
      <th scope="col">Send Money Number</th>
      <th scope="col">Txid</th>
      <th scope="col">Total de Produtos</th>
      <th scope="col">Total (kz)</th>
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
      <td><?php echo $row["mobnumber"] ?></td>
      <td><?php echo $row["txid"] ?></td>
      <td><?php echo $row["totalproduct"] ?></td>
      <td><?php echo $row["totalprice"] ?></td>
      <td><?php echo $row["status"] ?></td>
    </tr>
    <?php 
    }
        } 
        else 
            echo "Sem Resultados";
        ?>
  </tbody>
</table>
</div>

<?php
include_once 'footer.php'
?>