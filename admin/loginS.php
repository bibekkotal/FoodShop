<?php session_start(); 
include'inc/db.php';
if (isset($_POST['save'])) {
	$u=$_POST['uname'];
	$p=$_POST['pass'];

	$sel="SELECT * FROM admin WHERE a_uname='$u' AND a_pass='$p'";
	$rs=$con->query($sel);

	if ($rs->num_rows>0) {
		
		$row=$rs->fetch_assoc();
		$_SESSION['aid']=$row['a_id'];
		$_SESSION['aun']=$row['a_uname'];
		header("location:add_fcategory.php");
	} else { echo "Login Faild !";
			 header("location:login.php"); }
	}
?>