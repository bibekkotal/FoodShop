<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BE FRESH | ORDER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="./assets/main.css">
  <link rel="stylesheet" type="text/css" href="./assets/checkout.css">
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

		<div class="col-md-6">
     <form action="ins_order.php" method="post">
        <div class="card shadow p-3">
        <h4>Billing Adress</h4>
        <label>Please Enter Your Correct Info !</label>
        <div class="col-md-12 pt-4">
          <div class="row pb-3">
           <div class="col-md-3"><p>Name</p></div>
           <div class="col-md-9"><input type="text" name="bn" id="bn" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Email</p></div>
           <div class="col-md-9"><input type="email" name="be" id="be" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Phone</p></div>
           <div class="col-md-9"><input type="text" name="bp" id="bp" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Address</p></div>
           <div class="col-md-9"><input type="textarea" name="ba" id="ba" class="form-control"></div>
          </div>

        </div>
        </div>
		</div>

    <div class="col-md-6">
        <div class="card shadow p-3">
        <h4>Shipping Adress</h4>
        <label>Same As Billing Address ? <input type="checkbox" name="cb" id="cb"></label>
        <div class="col-md-12 pt-4">
          <div class="row pb-3">
           <div class="col-md-3"><p>Name</p></div>
           <div class="col-md-9"><input type="text" name="sn" id="sn" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Email</p></div>
           <div class="col-md-9"><input type="email" name="se" id="se" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Phone</p></div>
           <div class="col-md-9"><input type="text" name="sp" id="sp" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <div class="col-md-3"><p>Address</p></div>
           <div class="col-md-9"><input type="textarea" name="sa" id="sa" class="form-control"></div>
          </div>

          <div class="row pb-3">
           <button type="submit" class="btn btn-outline-danger rounded-pill" name="save">CONFIRM ORDER <i class="fas fa-angle-double-right"></i></button>
          </div>
          </form>
        </div>
  </div>
</div>
<script>

  $(function(){
    $("#cb").click(function(){
      if($("#cb").prop("checked")){

        $("#sn").val($("#bn").val());
        $("#se").val($("#be").val());
        $("#sp").val($("#bp").val());
        $("#sa").val($("#ba").val());
      } else {
                $("#sn").val("");
                $("#se").val("");
                $("#sp").val("");
                $("#sa").val("");
      }
    });
  });

</script>
</body>
</html>