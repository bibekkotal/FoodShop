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
        <style>.modal-content{ width: 800px; }</style>
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
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Total</td>
                            <td>View Details</td>
                            <td>print</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("inc/db.php");
                            $select="SELECT * FROM morder";
                            $result=$con->query($select);

                            while ($row=$result->fetch_assoc()) {
                                ?>
                            <tr>
                                <td>
                                    <div class="modal" id="myModal<?php echo $row['id']; ?>">
                             <div class="modal-dialog">
                                 <div class="modal-content">

                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h5 class="modal-title">Customer Details</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                     <!-- Modal body -->
                                      <div class="modal-body">

                                              <div class="row">
                                                <div class="col-md-6">
                                                <p>Billing name: <?php echo $row['bn']; ?></p>
                                                <p>Billing email: <?php echo $row['be']; ?></p>
                                                <p>Billing phone: <?php echo $row['bp']; ?></p>
                                                <p>Billing address: <?php echo $row['ba']; ?></p>
                                              </div>
                                                      <div class="col-md-6">
                                                <p>Shipping name: <?php echo $row['sn']; ?></p>
                                                <p>Shipping email: <?php echo $row['se']; ?></p>
                                                <p>Shipping phone: <?php echo $row['sp']; ?></p>
                                                <p>Shipping address: <?php echo $row['sa']; ?></p>
                                              </div>
                                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php $moid=$row['id'];
                        $total=0;
                        $sels="SELECT * FROM sorder WHERE moid='$moid'";
                        $rss=$con->query($sels);
                        while ($rows=$rss->fetch_assoc()) {
                           $total=$total+($rows['qty']*$rows['price']);

                           $pid=$rows['pid'];
                              $selp="SELECT * FROM foods WHERE id='$pid'";
                              $rsp=$con->query($selp);
                              while($rowp=$rsp->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $rowp['f_name']; ?></td>
                                    <td><?php echo $rows['price']; ?></td>
                                    <td><?php echo $rows['qty']; ?></td>
                                    <td><?php echo $rows['qty']*$rows['price'];?></td>
                                </tr>
                            <?php } } ?>
                            </tbody>
                        </table>

                                 </div>
                             </div>
                                    </div>    
                                    </div>
                                <?php echo $row['bn']; ?></td>
                             <td><?php echo $row['bp']; ?></td>
                             <td><?php  echo $total; ?></td>
                            
                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">View More</button></td>
                            <td><a target="_blank" href="bill.php?id=<?php  echo $row['id'];?>" class="btn btn-primary">Print</a></td>

                            </tr> 
                        <?php } ?>
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
