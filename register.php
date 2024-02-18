<?php

include "lib/connection.php";
$result = null;
  if (isset($_POST['u_submit'])) 
  {
    $f_name=$_POST['u_name'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $cpass=md5($_POST['c_pass']);
 if(!empty($f_name) and !empty($l_name) and !empty($email) and !empty($pass)){

    if ($pass==$cpass) 
    {
         $insertSql = "INSERT INTO users(f_name ,l_name, email, pass) 
         VALUES ('$f_name', '$l_name','$email', '$pass')";

         if ($conn -> query ($insertSql)) 
         {
            $result="Account Open success";
            header("location:login.php");
         }
         else
         {
             die($conn -> error);
         }
    }
    else
    {
      $result="Senha e E-mail não conferem";
    }


}else{
    $result="Todos os Campos devem ser Preenchidos";
}
  } 

?>



<!DOCTYPE html>
<html>
<head>
	<title>Loja Fashion - Login</title>
	<meta charset="UTF-8">
    <meta name="description" content="test">
    <meta name="keywords" content="HTML, CSS, BOOTSTRAP">
    <meta name="author" content="Osvaldo Victor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <!--font-family: 'Raleway', sans-serif;-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="favicon" type="text/css" href="#favicon">
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="Ionicons/css/ionicons.min.css">
    <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
</style>
</head>
<body>

 
<section class="background-radial-gradient overflow-hidden">


  <div class="container px-4 py-5 px-md-5 text-center text-lg-start">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Sua Melhor Escolha Sempre <br />
          <span style="color: hsl(218, 81%, 75%)">A qualquer lugar</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Tenha sempre em sua posse o melhor produto ao melhor preço.
          Proporcionamos a si uma bela experiência, e a oportunidade
          de escolher a qualquer hora o que você deseja.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="bg-danger my-3 text-center">

            <?php echo $result;  ?>    
        </div>
          <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline text text-left">
                    <input type="text" name="u_name" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">Primeiro Nome</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline text text-left">
                    <input type="text" name="l_name" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Sobrenome</label>
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4 text text-left">
                <input type="email" name="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">E-mail</label>
              </div>
              <div class="form-outline mb-4 text text-left">
                <input type="password" id="form3Example4" 
                name="pass" class="form-control" />
                <label class="form-label" for="form3Example4">Senha</label>
              </div>
              <div class="form-outline mb-4 text text-left">
                <input type="password" id="form3Example4" 
                name="c_pass" class="form-control" />
                <label class="form-label" for="form3Example4">Confirmar Senha</label>
              </div>
              <button type="submit" name="u_submit" class="btn btn-primary btn-block mb-4">
               Registrar
              </button>
              <p class="mb-5 pb-lg-2" style="color: #393f81;">Já Tens uma conta? <a href="login.php"
                      style="color: #393f81;">Login</a></p>
                  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>