<?php

SESSION_START();

if(isset($_SESSION['autor']))
{
	session_unset();
	session_destroy();
	header("location:login.php");
}
else
{
	header("location:login.php");
}


?>