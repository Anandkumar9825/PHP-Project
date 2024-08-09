<?php
	session_start();
	unset($_SESSION['User_Name']);
	header("Location:http://localhost/meet/admin_side/index.php");
?>