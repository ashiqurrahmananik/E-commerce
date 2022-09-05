<?php
 include'header.php';
 SESSION_START();

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
include'lib/connection.php';
if (isset($_POST['submit'])) 
{
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];

$sql = "SELECT * FROM orders where created_at>='$starttime' && created_at<'$endtime'";
$result = $conn -> query ($sql);
}
?>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="starttime">Start (date and time):</label>
  <input type="datetime-local" id="starttime" name="starttime">

  <label for="endtime"> End (date and time):</label>
  <input type="datetime-local" id="endtime" name="endtime">
  <input type="submit" name="submit">
</form>
<div class="container pendingbody">
  <h5>All Orders</h5>
<table class="table">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Send Money Number</th>
      <th scope="col">Txid</th>
      <th scope="col">Total Product</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $t=0;
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["status"]=="Delivered")
                {
                    $t=$t+$row["totalprice"];

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

        } 
        else 
            echo "0 results";
        ?>
  </tbody>
</table>
<?php echo "Total= " . $t ." Taka";?>

</div>
