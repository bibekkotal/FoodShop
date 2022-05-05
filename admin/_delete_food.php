<?php include("inc/db.php");
	
	echo $delid=$_GET['dfid'];
	$del="DELETE FROM foods WHERE c_id='$delid'";
	$con->query($del);
	header("location:_list_food.php");

?>