<div class="sidenav">
	<div class="nav-item">
		<a href="./Index.php">
			<img alt="Default Icon" src="assets/image/png-icons/dish (1).png" width="60">
		</a> 
	</div>

<?php include'./admin/inc/db.php';
	  $sel=" SELECT * FROM fcategory ";
	  $rs=$con->query($sel);
	  while ($row=$rs->fetch_assoc()) {
	  ?>
	<div class="nav-item">
		<a href="category.php?cid=<?php echo $row['id']; ?>">
			<img alt="Food Icon" src="./admin/c_img/<?php echo $row['c_image']; ?>" width="60">
		</a> <p><?php echo $row['c_name']; ?></p>
	</div>
<?php } ?>

</div>