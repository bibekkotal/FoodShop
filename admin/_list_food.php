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
                  <table class="table border">
                        <thead>
                            <tr>
                            <td>Category</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Delete</td>
                            <td>Edit</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("inc/db.php");
                            $select="SELECT foods.*,fcategory.c_name FROM foods INNER JOIN fcategory ON foods.c_id=fcategory.id";
                            $result=$con->query($select);

                            while ($row=$result->fetch_assoc()) {
                                ?>
                            <tr>
                                <td><?php echo $row['c_name']; ?></td>
                                <td><?php echo $row['f_name']; ?></td>
                                <td><?php echo $row['f_price']; ?></td>
                                <td><img src="../product_img/<?php echo $row['f_image']; ?>" style="width: 80px;"></td>
                                <td><a href="_delete_food.php?dfid=<?php echo $row['c_id']; ?>" class="btn btn-danger">Delete</a></td>
                                <td><a href="_update_food.php?efid=<?php echo $row['c_id']; ?>" class="btn btn-success">Edit</a></td>
                            </tr>
                        <?php  } ?>

                        </tbody>
                    </table>
            
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
