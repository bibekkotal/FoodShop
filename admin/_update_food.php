<?php session_start();
if (!isset($_SESSION['aun'])) {
    header("location:login.php");
} ?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Foods Plaza</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

  <!-- Top Included -->  <?php include("inc/top.php"); ?>  <!-- Top Included -->

        <div id="layoutSidenav">

   <!-- Side Included -->  <?php include("inc/side.php"); ?>   <!-- Side Included -->  


            <div id="layoutSidenav_content">
                <main>
<div class="container-fluid">
        <h1 class="mt-4">Edit Food</h1>
        <?php include'inc/db.php';
        $id=$_GET['efid'];
        $select="SELECT * FROM foods WHERE f_id='$id'";
        $result=$con->query($select);
        while ($row=$result->fetch_assoc()){
            ?>
        <form action="_update_ins_food.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['f_id']; ?>">
            <p>Select Food Category</p>
            <p><select id="category" name="category" class="form-control">
            <option <?php if ($row['c_id']=="") { echo "selected"; } ?> value=""> - Select Food Category- </option>
            <option <?php if ($row['c_id']=="Foods") { echo "selected"; } ?> value="Foods">Foods</option>
            <option <?php if ($row['c_id']=="Drinks") { echo "selected"; } ?> value="Drinks">Drinks</option>
            <option <?php if ($row['c_id']=="Snakes") { echo "selected"; } ?> value="Snakes">Snakes</option>
            <option <?php if ($row['c_id']=="Desserts") { echo "selected"; } ?> value="Desserts">Desserts</option>
            </select></p>
            <p>Product Name</p><p><input type="text" name="name" class="form-control" value="<?php echo $row['f_name']; ?>"></p>
            <p>Product Price</p><p><input type="text" name="price" class="form-control" value="<?php echo $row['f_price']; ?>"></p>
             <div class="form-group row">
                <div class="col-sm-2 col-form-label"> <img src="../product_img/<?php echo $row['f_image']; ?>" style="width: 100px;"></div>
                <div class="col-sm-10">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
            <button type="submit" name="update" class="btn btn-info"><i class="fas fa-plus"></i>&nbsp Update Food</button>
        </form>  <?php } ?>         
</div>
                </main>

   <!-- Footer Included --> <?php include("inc/footer.php"); ?>     <!-- Footer Included -->
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
