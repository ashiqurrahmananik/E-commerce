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


 $sql = "SELECT * FROM users";
 $result = $conn -> query ($sql);
?>


<div class="container pendingbody">
  <h5>Todos os Usuarios</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Primeiro Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
    <tr>
      <td><?php echo $row["id"] ?></td>
      <td><?php echo $row["f_name"] ?></td>
      <td><?php echo $row["l_name"] ?></td>
      <td><?php echo $row["email"] ?></td>
    </tr>
    <?php 
    }
        } 
        else 
            echo "Sem Registros";
        ?>
  </tbody>
</table>
</div>

<?php
include_once 'footer.php'
?>