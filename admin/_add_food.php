<?php session_start();
if (!isset($_SESSION['aun'])) {
    header("location:login.php");
} ?>
<!DOCTYPE html>
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
        <h1 class="mt-4">Add Food</h1>
        <?php include'inc/db.php'; ?>
        <form action="_ins_food.php" method="post" enctype="multipart/form-data">
            <p>Select Food Category</p>
            <p><select name="category" class="form-control">
            <option value=""> - Select Food Category- </option>
            <?php $select="SELECT * FROM fcategory";
                  $result=$con->query($select);
                  while ($row=$result->fetch_assoc()) {
                  ?><option value="<?php echo $row['id']; ?>"><?php echo $row['c_name']; ?></option>
                <?php }  ?>
            </select></p>
            <p>Product Name</p><p><input type="text" name="name" class="form-control"></p>
            <p>Product Price</p><p><input type="text" name="price" class="form-control"></p>
            <p>Product Image</p><p><input type="file" name="image" id="file" style="display:none;"></p>
            <label for="file" class="form-control">Add A Picture</label>
            <button type="submit" name="save" class="btn btn-info"><i class="fas fa-plus"></i>&nbsp Add Food</button>
        </form>
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
