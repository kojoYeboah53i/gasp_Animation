<?php
session_start();
include 'db.php';
$id =$_SESSION['staff_id'];
$time = date('H:i:s');
mysqli_query($con,"UPDATE logs SET time_loged_out = '$time' where salesperson_id = '$id'  ");
unset($_SESSION['staff_id']);
session_destroy();
echo '<script>window.location.href="index.php"</script>';

