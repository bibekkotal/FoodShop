<?php $con=mysqli_connect("localhost","root","","fooddelservices" );
	
	echo $delid=$_GET['cdid'];
	$del="DELETE FROM ordered WHERE f_id='$delid'";
	$con->query($del);
	header("location:../cart.php");

?>