<?php session_start();
if (!isset($_SESSION['aun'])) {
    header("location:login.php");
}
include("inc/db.php");

$id=$_GET['id'];
$upd="UPDATE ratting SET isapproved='0' WHERE id='$id'";
$con->query($upd);

header("location:ratting.php");
?>