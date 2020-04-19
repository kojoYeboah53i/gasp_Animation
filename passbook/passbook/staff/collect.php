<?php 


session_start();
include '../engine.php';
 if (!isset($_SESSION['staff_id'])) {
        echo '<script>window.location.href="../index.php"</script>'; 
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../media.css">

    <title>Pass Book</title>
    <script src="../jquery.js"></script>
    <script src="../main.js"></script>
</head>
<body>
<div class="cover">
<a href="../logoutstaff.php"><img id="uimg" src="../assets/cancelr.png" alt="" srcset=""></a>
   <img id="uimg2" src="../assets/user.png" alt="" srcset="">
   <div class="uname"><?php echo $_SESSION['staff_name'];?></div>
    <h1 id="logotxt"><span id="d1">Pass</span><span id="d2">Book</span></h1>


  <!-- Login form -->
     <form id="collect" action="" method="post">
          <p><input type="text" name="cid" id="cid" placeholder="Enter Customer Id..."></p>
     </form>
     <!-- end of form -->
     <div class="dis">
        Results will display here...
     </div>
    

</div>


   
</body>
</html>