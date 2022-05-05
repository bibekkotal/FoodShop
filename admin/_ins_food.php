<?php  include("inc/db.php");
		
		if (isset($_POST['save'])) {
			
			$cid=$_POST['category'];
			$name=$_POST['name'];
			$price=$_POST['price'];
			$filename=time().$_FILES['image']['name'];
			$extarr=explode(".", $filename);
			$extrev=array_reverse($extarr);
			if ($extrev[0]=="jpg" || $extrev[0]=="jpeg" || $extrev[0]=="png") {
			$temp=$_FILES['image']['tmp_name'];
			move_uploaded_file($temp, "../product_img/".$filename);

			$insert="INSERT INTO foods SET c_id='$cid', f_name='$name', f_price='$price',	f_image='$filename'	";								
			$con->query($insert);
			if ($con) {
				?>        <script>alert("Product Added Succesfully !"); window.location="_list_food.php";</script> <?php
			}
		  }
		}      else  { echo "Access Denied !"; }
?>