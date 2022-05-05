<?php include'admin/inc/db.php'; session_start();
if (isset($_POST['save'])) {

$bn=$_POST['bn'];
$be=$_POST['be'];
$bp=$_POST['bp'];
$ba=$_POST['ba'];

$sn=$_POST['sn'];
$se=$_POST['se'];
$sp=$_POST['sp'];
$sa=$_POST['sa'];

$odate=time();
$cid=$_SESSION['aid'];

$ins="INSERT INTO morder SET cid='$cid', odate='$odate', bn='$bn', be='$be', bp='$bp', ba='$ba', sn='$sn', se='$se', sp='$sp', sa='$sa'";
$con->query($ins);
$moid = $con->insert_id;

$_SESSION['moid']=$moid;

$sel="SELECT * FROM ordered WHERE c_id='$cid'"; // Somethink else
      $rs=$con->query($sel);
      while ($row=$rs->fetch_assoc()) {
      	$pid=$row['f_id'];
      	$qty=$row['qty'];
      	$price=$row['price'];
      	$total=$total+($row['price']*$row['qty']);
     $iorder="INSERT INTO sorder SET moid='$moid', pid='$pid', qty='$qty', price='$price'";
     $con->query($iorder);
      }

      $del="DELETE FROM ordered WHERE c_id='$cid'";
      $con->query($del);
} ?>