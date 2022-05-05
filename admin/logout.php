<?php  session_start();
	
			unset($_SESSION['aun']);
			header("location:login.php");
?>
