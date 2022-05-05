<?php include'inc/db.php';
if (isset($_POST['update'])) {
	$ca=$_POST['category'];
	$n=$_POST['name'];
	$p=$_POST['price'];
	$id=$_POST['id'];
	if ($_FILES['image'] ['name']!="") {
	$fn=time().$_FILES['image']['name'];
	$extarr=explode(".", $fn);
	$extrev=array_reverse($extarr);
	if ($extrev[0]=="jpg" || $extrev[0]=="jpeg" || $extrev[0]=="png") {
		$temp=$_FILES['image']['tmp_name'];  
		move_uploaded_file($temp, "../product-img/".$filename);
	$ins="UPDATE foods SET f_name='$n', ";
	}
	}
}
?>