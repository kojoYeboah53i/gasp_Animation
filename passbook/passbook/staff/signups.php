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




 
<div class="msg"></div>
     <!-- pass book form -->
     <form id="su" action="" method="post">
        <!-- border-frame -->
        <div class="frame">
            <!-- Slider -->
            <div class="slider">
                <!-- inputs -->
                <p><input type="text" class="inp" name="cusid" id="" placeholder="Customer Id"></p>
                <p><input type="text" class="inp" name="name" id="" placeholder="Name"></p>
                <p><input type="text" class="inp" name="location" id="" placeholder="Location"></p>
                <p><input type="text" class="inp" name="phonum" id="" placeholder="Phone Number"></p>
                <p><input type="text" class="inp" name="Occupation" id="" placeholder="Occupation"></p>
                <p><h3><span id="d1">Item</span></h3>
                <select name="cate" class="inp" id="">
                 <option  value="---">Enter Category</option>
                 <option id="order" value="order">Order</option>
                 <option id="order2" value="phone">Phone</option>
                 <option id="order3" value="fridge">Fridge</option>
                 <option id="order4" value="tv">Tv</option>

                </select>
                
                <div id="pi1">
                <div class="title"></div>
                <input type="text" class="inp" name="order" id="ordername" placeholder="Product Name"><br>
                <input class="inp" type="text" name="price" id="orderp" placeholder="Price of the product"> <br>
                <input type="text" class="inp" name="newamount" id="" placeholder="Enter amount paid">

                </div>
              
                </p>
                <input type="submit" class="si" name="" id="signupsss" value="Submit">
            </div>
            <!-- end of slider -->
        </div>
        <!-- end of frame -->
        
     </form>
     <!-- end of form -->
    

</div>


</body>
</html>