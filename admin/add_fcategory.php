<?php session_start();
if (!isset($_SESSION['aun'])) {
    header("location:login.php");
} ?>
<!DOCTYPE html>
<html>
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
        <h1 class="mt-4">Add Category</h1>
        <form action="" method="post" enctype="multipart/form-data">
                    <p><input type="text" name="name" class="form-control"></p>
                    <p><input type="file" name="image" id="file" style="display:none;"></p>
                    <label for="file" class="form-control">Add A Picture</label>
                    <button type="submit" name="save" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp Save</button> 
                    </form>
                    <?php include'./inc/db.php';
                    if (isset($_POST['save'])) {
                    $n=$_POST['name'];
                    $filename=time().$_FILES['image']['name'];
                    $extarr=explode(".", $filename);
                    $extrev=array_reverse($extarr);
                    if ($extrev[0]=="jpg" || $extrev[0]=="png" || $extrev[0]=="jpeg") {
                    $temp=$_FILES['image']['tmp_name'];
                    move_uploaded_file($temp, "c_img/".$filename);
                    $ins="INSERT INTO fcategory SET c_name='$n', c_image='$filename'";
                    $con->query($ins);
                    if ($con) {
                    ?><script>alert("Food Category Added Successfully In DB !");
                              window.location="list_fcategory.php";</script><?php
                              } 
                        }
                    } else { echo ""; } ?>
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