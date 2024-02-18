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
$sql = "SELECT * FROM message";
$result = $conn -> query ($sql);
?>

<div class="container pendingbody">
  <h5>Mensagens</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Assunto</th>
      <th scope="col">Mensagem</th>
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
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["assunto"] ?></td>
      <td><?php echo $row["sms"] ?></td>
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