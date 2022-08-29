<?php
 include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4>Add Product</h4>
    <form>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputType" class="form-label">Catagory</label>
    <input type="text" class="form-control" id="exampleInputType">
  </div>
  <div class="mb-3">
    <label for="exampleInputQuantity" class="form-label">Quantity</label>
    <input type="number" class="form-control" id="exampleInputQuantity">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="Number" class="form-control" id="exampleInputPrice">
  </div>
  <div class="mb-3">
        <label for="uploadfile" class="form-label">Image</label>
        <input type="file" name="uploadfile" value="" />
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>