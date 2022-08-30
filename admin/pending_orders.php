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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pending_orders.css">

</head>
<body>

<div class="container pendingbody">
  <h5>Pending Orders</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Payment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="../img/1.jfif" style="width:50px;"></td>
      <td>Mi Note 10</td>
      <td>50</td>
      <td>20,000</td>
      <td>Anik</td>
      <td>Cash On</td>
      <td>Approve/Reject</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="../img/1.jfif" style="width:50px;"></td>
      <td>Mi Note 10</td>
      <td>50</td>
      <td>20,000</td>
      <td>Anik</td>
      <td>Cash On</td>
      <td>Approve/Reject</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="../img/1.jfif" style="width:50px;"></td>
      <td>Mi Note 10</td>
      <td>50</td>
      <td>20,000</td>
      <td>Anik</td>
      <td>Cash On</td>
      <td>Approve/Reject</td>
    </tr>
  </tbody>
</table>
</div>
    
</body>
</html>