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
  <link rel="stylesheet" type="text/css" href="assets/main.css">
  <link rel="stylesheet" type="text/css" href="assets/details.css">
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
     	<div class="col-md-4">
 <?php  include'./admin/inc/db.php';
  		$fid=$_GET['id'];
  		$sel="SELECT * FROM foods WHERE f_id='$fid'";
    	$rs=$con->query($sel);
    	while ($row=$rs->fetch_assoc()) {
    	?>

    <div class="card shadow">

	          <img class="card-img-top" src="product_img/<?php echo $row['f_image']; ?>" >

	              <div class="card-body">

	    <div class="col-md-12">
        <div class="row mt-2">
          <div class="col-md-6 p-0"><p class="card-head"><?php echo $row['f_name']; ?></p></div>
          <div class="col-md-6 p-0"><p id="card-price">&#8212 &#8377; <?php echo $row['f_price']; ?>/-</p></div>
	    </div>

	    </div>

          <form action="ins_cart.php" method="post" enctype="multipart/form-data">
	        <input type="hidden" name="cid" value="<?php echo $_SESSION['aid']; ?>">
	        <input type="hidden" name="pid" value="<?php echo $row['f_id']; ?>">
	        <input type="hidden" name="price" value="<?php echo $row['f_price']; ?>">

	    <div class="col-md-12">
        <div class="row">
	   		<div class="col-md-2 "><input type="number" name="qty" value="1" min="1" max="10" id="qty"></div>
	   		<div class="col-md-10 "><button name="save" class="btn order-btn">Order Now <i class="fas fa-angle-double-right"></i></button></div>
	    </div>
	    </div></form>

				  </div>
	</div>

<?php } ?>

     	</div>

     	<div class="col-md-8">
			<div class="c-div shadow p-4">
        
				<div class="coment-box">
						    <?php
	  include'./admin/inc/db.php';
      $id=$_GET['id'];
      $sel="SELECT * FROM ratting where pid='$id' AND isapproved='1'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
      <div class="row">
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-md-4">
        			<h5 class="text"><i class="far fa-user-circle"></i>&nbsp<?php echo $row['name']; ?></h5>
        		</div>
        		<div class="col-md-4">
        			<p>
			          <?php for($i=1;$i<=$row['ratting'];$i++){ ?>
			          <span class="fa fa-star checked"></span>
			        <?php  } ?>

			        <?php for($j=1;$j<=5-$row['ratting'];$j++) {?>
			       <span class="fa fa-star "></span>
			        <?php  } ?>
			      </p>
        		</div>
        		<div class="col-md-4">
        			  <p class="text"><?php echo $row['review'] ?></p>
        		</div>
        	</div>
      <hr/>
        </div>
      </div>

    <?php  } ?>
			    </div>

			    <div class="fd-box p-2">
    <div class="col-md-12">
    		<h3 class="card-head">Give Your Feedback </h3>
					<form action="ins_ratting.php" method="post" class="text">
					 <input type="hidden" name="pid" value="<?php echo $fid; ?>">
					     <div class="row">
					     	<div class="col-md-6">
					     		<input type="text" id="text" name="name" placeholder="Name" class="form-control">
					     	</div>
					     	<div class="col-md-6">
					     		<input type="text" id="text" name="phone" placeholder="Phone" class="form-control">
					     	</div>
					     </div>

					     <div class="row">
					     	<div class="col-md-6">
								  <div class="rtn">
								  <p>Ratting</p>
								  <fieldset class="rating">
								    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
								    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
								    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
								    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
								    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
								</fieldset>
								</div>
					     	</div>
					     	<div class="col-md-6">
					     		<textarea class="form-control" id="text" name="rv" placeholder="Leave A Comment..."></textarea>
					     	</div>
					     </div>
					     <div class="row p-o mt-3">
					     	<button type="submit" name="savert" class="btn order-btn">Feedack <i class="fas fa-angle-double-right"></i></button>
					     </div>

					</form>
    </div>
				</div>
			</div>
     	</div>

   </div>
 </div>
</div>

</body>
</html>