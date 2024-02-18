<?php 

session_start();

if(isset($_SESSION['autor']))
{
    if($_SESSION['autor']==1)
    {
        header("location:home.php");
    }
}

include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = ($_POST['password']);
        $loginquery="SELECT * FROM admin WHERE userid='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);
        if ($loginres->num_rows > 0) 
        {
            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['userid'];
                $userid=$result['id'];

            }

            $_SESSION['sobrenome']=$username;
            $_SESSION['autor']=1;
            $_SESSION['id'] = $userid;
            header("location: index.php");
        }
        else
        {
            header("location: login.php?error=true");
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                class="user">
                                <div class="form-group">
                                    <input type="text" 
                                    class="form-control form-control-user"
                                        id="exampleInputEmail" 
                                        aria-describedby="emailHelp"
                                        placeholder="Username"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                    </div>
                                </div>
                                <input value="LOGIN" type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                    
                                
                             
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>