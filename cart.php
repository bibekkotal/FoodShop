<?php session_start(); include'admin/inc/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BE FRESH | CART</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="./assets/main.css">
  <link rel="stylesheet" type="text/css" href="./assets/cart.css">
  <style></style>
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
<div class="col-md-9" id="crt">


<?php include'admin/inc/db.php';
$cid=$_SESSION['aid'];
$st=0;
$sel="SELECT ordered.*, foods.f_name,foods.f_image FROM ordered INNER JOIN foods ON ordered.f_id=foods.f_id WHERE ordered.c_id='$cid'";
$rs=$con->query($sel);
while ($row=$rs->fetch_assoc()) {
  $st=$st+$row['price']*$row['qty'];
?>   <div id="v-card" class="card shadow">

<img src="product_img/<?php echo $row['f_image']; ?>" class="image-fluid" style="width: 100px;">
<div class="head"><?php echo $row['f_name']; ?></div>
<p>&#8212 &#8377; <?php echo $row['price']; ?>/-</p>
<input type="number" value="<?php echo $row['qty']; ?>" onchange="fun(this.value,<?php echo $row['id']; ?>)" id="qnty">
<p>&#8377;<?php echo $row['price']*$row['qty']; ?></p>
<button class="btn order-btn">Get Now <i class="fas fa-angle-double-right"></i></button>
<a onclick="confirm('Are You Sure ?');" href="./m-inc/cart-del.php?cdid=<?php echo $row['f_id']; ?>"><i class="far fa-times-circle"></i></a>
  </div>

<?php } ?>
  
</div>
   <div class="col-md-3">
     <div class="card position-fixed p-4 mr-4">
      <h6>Sub Total</h6><hr><p class="s-t">&#8377; <?php echo $st; ?></p>
      <hr>
      <a href="order.php" class="btn order-btn" title="">Checkout <i class="fas fa-check-double"></i></a>
   </div>
   </div>

   
   </div>
  </div>
</div>

<script>
function fun(qty,cid){
var fd=new FormData();

fd.append("id",cid);
fd.append("qty",qty);

$.ajax({
  url:'ajax.php',
  data:fd,
  type:'POST',
  contentType:false,
  processData:false,
  success:function(res){
    $("#crt").html(res);
  }
});
}
</script>

</body>
</html>