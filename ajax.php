<?php session_start();
include"admin/inc/db.php";

$id=$_POST['id'];
$qty=$_POST['qty'];
$upd="UPDATE ordered SET qty='$qty' WHERE id='$id'";
$con->query($upd);
?>



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
          <input type="number" value="<?php echo $row['qty']; ?>" min="1" onchange="fun(this.value,<?php echo $row['id']; ?>)" min="1" id="qnty">
          <p>&#8377;<?php echo $row['price']*$row['qty']; ?></p>
          <button name="save" class="btn order-btn">Buy Now<i class="fas fa-angle-double-right"></i></button>
          <a onclick="confirm('Are You Sure ?');" href="./m-inc/cart-del.php?cdid=<?php echo $row['f_id']; ?>"><i class="far fa-times-circle"></i></a>
      </div>

<?php } ?>
