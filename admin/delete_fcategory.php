<?php include("inc/db.php");
echo $delid=$_GET['did'];
$del="DELETE FROM fcategory WHERE id='$delid'";
$con->query($del);
header("location:list_fcategory.php");
?>