<?php
include'lib/connection.php';
$sql = "SELECT * FROM orders where status='pending'";
$result = $conn -> query ($sql);

$c=0;
  if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		$c=$c+1;
	}
}
	 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--css link-->
	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
      
<nav class="navbar navbar-dark bg-dark mb-6">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Painel de Administrador</a>
    <button class="navbar-toggler" type="button" 
	data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu do Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pending_orders.php">Pedidos 
		<span style="    
    color: red;"><?php echo $c ;?></span>
				</a>
          </li>
		   
		  <li class="nav-item"> <a class="nav-link" href="message.php">Mensagens</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Produtos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="add_product.php">Adicionar Produto</a>
              <li><a class="dropdown-item" href="all_product.php">Todos os Produtos</a>
           
            </ul>
          </li>
		  <li class="nav-item">
                <a class="nav-link u" href="users.php">Usuarios</a>
            </li>
        <li class="nav-item">
                <a class="nav-link u" href="report.php">Relatórios</a>
            </li>
			<li class="nav-item">
			<a class="nav-link u" href="logout.php">Sair</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


