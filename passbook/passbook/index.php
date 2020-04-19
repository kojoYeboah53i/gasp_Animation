<?php
session_start();
include 'engine.php';
if (isset($_SESSION['staff_id'])) {
    echo '<script>window.location.href="staff/collect.php"</script>'; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="media.css">

    <title>Pass Book</title>
    <script src="jquery.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="cover">
    <h1 id="logotxt"><span id="d1">Pass</span><span id="d2">Book</span></h1>
<center> <footer>A product of Brich Ghana Limited <?php echo date("Y")?></footer></center>

</div>

     <!-- Login form -->
     <div class="msg"></div>
     <img id="logo" src="assets/logo.png" alt="" srcset="">
     <form id="logform" action="" method="post">
          <p><input type="text"     name="uname" id="inp1" placeholder="Enter User name"></p>
          <p><input type="password" name="upass" id="inp1" placeholder="Enter Password"></p>
          <p><input type="submit"   name="log"   id="login" value="Login"></p>
     </form>
     <!-- end of form -->
</body>
</html>