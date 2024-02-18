<?php

SESSION_START();

if(isset($_SESSION['auth']))
{
	session_destroy();
	header("location:index.php");
}
else
{
	header("location:index.php");
}


?>