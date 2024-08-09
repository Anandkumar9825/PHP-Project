<?php
	session_start();
	unset($_SESSION['User_Name']);
	header("Location:http://localhost:8085/meet/login.php");
?>