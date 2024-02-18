<?php
 require_once 'lib/connection.php';
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

function totalUsuarios() {
    $conn = new mysqli("localhost", "root", "", "cse411project");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $sql = "SELECT count(*) as total from users";
    $resultado = $conn->query($sql);

    if ($resultado === false) {
        echo "Erro na consulta: " . $conn->error;
    } else {
        $row = $resultado->fetch_assoc();
        $total_usuarios = $row['total'];
    }

    $conn->close();

    return $total_usuarios;
}

function totalProdutos() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from product";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}


function totalPedidos() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from orders";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}


function totalMensagens() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from message";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}

function totalPendetes() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from orders where status = 'pending' ";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}

function totalEntregue() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from orders where status = 'delivered' ";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}

function totalCancelado() {
  $conn = new mysqli("localhost", "root", "", "cse411project");

  if ($conn->connect_error) {
      die("Erro de conexão: " . $conn->connect_error);
  }

  $sql = "SELECT count(*) as total from orders where status = 'canceled' ";
  $resultado = $conn->query($sql);

  if ($resultado === false) {
      echo "Erro na consulta: " . $conn->error;
  } else {
      $row = $resultado->fetch_assoc();
      $total_usuarios = $row['total'];
  }

  $conn->close();

  return $total_usuarios;
}


include_once 'header.php';
?>

<div class="container" style="margin-top: 12px;">
   <div class="row my-4 gap-4">
   <div class="card col-3 text-center">
  <div class="card-header">
   Usuarios
  </div>
  <div class="card-body">
    <h5 class="card-title">Total de Usuarios</h5>
    <p class="card-text">
    <?php
 $total_usuarios = totalUsuarios();
  echo  $total_usuarios ;
  ?> 
  <p>

    <a href="users.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>

   <div class="card col-3 text-center">
  <div class="card-header">
   produtos
  </div>
  <div class="card-body">
    <h5 class="card-title">Total de Produtos</h5>
    <p class="card-text">
    <?php
 $total_produtos = totalProdutos();
  echo   $total_produtos ;
  ?> 
  <p>

    <a href="all_product.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>

   <div class="card col-4 text-center">
  <div class="card-header">
  Pedidos 
  </div>
  <div class="card-body">
    <h5 class="card-title">Total de Pedidos Realizados</h5>
    <p class="card-text">
    <?php
 $total_pedidos = totalPedidos();
  echo    $total_pedidos ;
  ?> 
  <p>

    <a href="all_orders.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>



   <div class="card col-3 text-center">
  <div class="card-header">
  Mensagens 
  </div>
  <div class="card-body">
    <h5 class="card-title">Total de Mensagens</h5>
    <p class="card-text">
    <?php
 $total_mensagem = totalMensagens();
  echo  $total_mensagem ;
  ?> 
  <p>

    <a href="all_orders.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>
   
   <div class="card col-3 text-center">
  <div class="card-header">
  Pedidos 
  </div>
  <div class="card-body">
    <h5 class="card-title">Pedidos Pendentes</h5>
    <p class="card-text">
    <?php
 $total_pendentes = totalPendetes();
  echo  $total_pendentes ;
  ?> 
  <p>

    <a href="pending_orders.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>

   <div class="card col-4 text-center">
  <div class="card-header">
  Pedidos 
  </div>
  <div class="card-body">
    <h5 class="card-title">Pedidos Entregues</h5>
    <p class="card-text">
    <?php
 $total_entregues = totalEntregue();
  echo  $total_entregues ;
  ?> 
  <p>

    <a href="pending_orders.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>


   <div class="card col-4 text-center">
  <div class="card-header">
  Pedidos 
  </div>
  <div class="card-body">
    <h5 class="card-title">Pedidos Cancelados</h5>
    <p class="card-text">
    <?php
 $total_cancelado = totalCancelado();
  echo  $total_cancelado ;
  ?> 
  <p>

    <a href="pending_orders.php" class="btn btn-sm btn-primary">ver mais</a>
  </p> 
  </div>
   </div>

   </div>
   </div>
</div>

    
<?php
include_once 'footer.php'
?>