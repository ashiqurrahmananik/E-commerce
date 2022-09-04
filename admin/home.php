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
$sql = "SELECT * FROM orders where status='1'";
$result = $conn -> query ($sql);
$t=0;
$sql = "SELECT * FROM product";
$result1 = $conn -> query ($sql);
$tp=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
    
    <div class="container homebody">
        <div class="row">
            <div class="col-md-12">
                <h1>Walcome To The Admin Panel</h1>
                <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $t=$t+$row["totalprice"];
            }
        }
        echo "total=" . $t ." Taka";
              ?>

<?php
          if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row1 = mysqli_fetch_assoc($result1)) {
                $tp=$tp+1;
            }
        }
        echo "/total product=" . $tp;
              ?>
                

            </div>
        </div>
    </div>
    
</body>
</html>