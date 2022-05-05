<?php  include("admin/inc/db.php");


		if (isset($_POST['save'])) {

			$cid=$_POST['cid'];
			$pid=$_POST['pid'];
			$price=$_POST['price'];
			$qty=$_POST['qty'];

			$sel="SELECT * FROM ordered WHERE f_id='$pid' AND c_id='$cid' ";
			$rs=$con->query($sel);
			if($rs->num_rows>0){
				$row=$rs->fetch_assoc();
				$fqty=$row['qty']+$qty;

                	$upd="UPDATE ordered SET qty='$fqty'  WHERE f_id='$pid' AND c_id='$cid'  ";
			$con->query($upd);
			header("location:cart.php");
			}else{

			$ins="INSERT INTO ordered SET f_id='$pid', c_id='$cid', price='$price', qty='$qty' ";
			$con->query($ins);

			header("location:cart.php");
		}


		}
?>