<?php session_start();
if (!isset($_SESSION['an'])) {
header("location:./m-inc/ulogin.php");
 } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BE FRESH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="assets/main.css"><style>body{ overflow: hidden; }</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<!-- Start Of top-bar-->
<?php include'm-inc/top-bar.php'; ?>
<!-- End Of top-bar-->

<!-- Start Of sidenav-->
<?php include'm-inc/side-nav.php'; ?>
<!-- Start Of sidenav-->


<div class="container-fluid">
	<div class="col-md-12">


    <div class="row">
    	<?php include'./admin/inc/db.php';
    	$cid=$_GET['cid'];
    	$sel="SELECT * FROM foods WHERE c_id='$cid'";
    	$rs=$con->query($sel);
    	while ($row=$rs->fetch_assoc()) {
    	?>
         <div class="col-md-6">
											<!-- Start of Card  -->

          	<div class="card shadow">
				<div class="row">

				<div class="col-md-6">
				     <a href="details.php?id=<?php echo $row['f_id']; ?>">
					 <img src="product_img/<?php echo $row['f_image']; ?>" alt="Product Image" class="img-fluid"></a>
				</div>

				<div class="col-md-6">
					  <div class="card-body">
					    <p class="card-head"><?php echo $row['f_name']; ?></p>
					    <div class="card-text">
							<p class="card-subtitle">&#8226 enjoy a taste of heaven<br>&#8226 satisfy your taste<br>&#8226 made to perfection</p></div>

					    	<p id="card-price">&#8212 &#8377; <?php echo $row['f_price']; ?>/-</p>
					            <form action="ins_cart.php" method="post" enctype="multipart/form-data">
						            <input type="hidden" name="cid" value="<?php echo $_SESSION['aid']; ?>">
						            <input type="hidden" name="pid" value="<?php echo $row['f_id']; ?>">
						            <input type="hidden" name="price" value="<?php echo $row['f_price']; ?>">
					                <div class="row qtb">
						       		<div class="col-md-2"><input type="number" name="qty" value="1" min="1" max="10" id="qnty"></div>
						       		<div class="col-md-10"><button name="save" class="btn order-btn">Order Now <i class="fas fa-angle-double-right"></i></button></div>
						            </div>
								</form>
					  </div>
				</div>
				</div>
			</div>
								            <!-- End of Card  -->
         </div><?php } ?>

    </div>



</div>
</div>



</body>
</html>