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
 $result=null;
if (isset($_POST['submit'])) 
{
    $name=$_POST['name'];
    $catagory=$_POST['catagory'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $filename = $_FILES["uploadfile"]["name"];


    $insertSql = "INSERT INTO product(name, catagory, description, quantity, price, imgname) VALUES ('$name', '$catagory', '$description',$quantity, $price, '$filename')";

    if ($conn -> query ($insertSql)) 
    {
        $result="Produto Cadastrado com Sucesso";
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "product_img/".$filename;

        move_uploaded_file($tempname, $folder);
    }
    else
    {
     die($conn -> error);
 }

} 
?>

    <div class="container py-3">
      <div class="bg-info text-center">

        <?php echo $result;?>
      </div>
        <h4>Adicionar Produtos</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label"> Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputType" class="form-label">Categoria</label>
    <input type="text" name="catagory"  class="form-control" id="exampleInputType">
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Descrição</label>
    <input type="text" name="description" class="form-control" id="exampleInputDescription">
  </div>
  <div class="mb-3">
    <label for="exampleInputQuantity" class="form-label">Quantidade</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputQuantity">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Preço</label>
    <input type="Number" name="price" class="form-control" id="exampleInputPrice">
  </div>
  <div class="mb-3">
        <label for="uploadfile" class="form-label">Imagem de capa</label>
        <input type="file" name="uploadfile" />
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
</body>
</html>

<?php
include_once 'footer.php'
?>