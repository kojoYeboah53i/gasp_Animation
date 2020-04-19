<?php


function add()
{
      include 'db.php';

      $UserName = strtolower($_POST['uname']);
      $Password = rand(0,999999);
      $cate = $_POST['cate'];
      $date = $_POST['date'];
      if(mysqli_query($con,"INSERT INTO stuff(usr_name,usr_pass,date_registered,salesperson)VALUES('".$UserName."','".$Password."','".$date."','".$cate."')"))
      {
          echo "<h2 > Submission Successful...</h2>";
      }

      
}



function data(){
        
        include 'db.php';

        $uname = strtolower($_POST['uname']);
        $upass = $_POST['upass'];

        if($sele = mysqli_query($con,"SELECT * FROM stuff WHERE usr_name = '$uname' and usr_pass= '$upass' ")){

        while ($row = mysqli_fetch_array($sele)) {

              $salesperson = $row['salesperson'];
              if($salesperson == 'collectors')
              {
                $_SESSION['staff_id'] = $row['usr_id'];
                $_SESSION['staff_name'] = $row['usr_name'];
                $id = $_SESSION['staff_id'];
                mysqli_query($con,"INSERT INTO logs(salesperson_id)VALUES('".$id."')");
                echo '<script>window.location.href="staff/collect.php"</script>';

              }
              if($salesperson == 'signups')
              {
                $_SESSION['staff_id']   = $row['usr_id'];
                $_SESSION['staff_name'] = $row['usr_name'];
                $id = $_SESSION['staff_id'];

                mysqli_query($con,"INSERT INTO logs(salesperson_id)VALUES('".$id."')");
                echo '<script>window.location.href="staff/signups.php"</script>';
              }
              

        }
    }else{
        echo "<h3> Oops could not Login </h3>";
    }


        

}




function signups()
{
    include 'db.php';
    $cus_id = $_POST['cusid'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phonum = $_POST['phonum'];
    $cate = $_POST['cate'];
    $order_name = $_POST['order'];
    $order_price = $_POST['price'];


    if(mysqli_query($con,"INSERT INTO signups(cus_id,name,location,pho_num,item,order_name,price)
    VALUES('".$cus_id."','".$name."','".$location."','".$phonum."','".$cate."','".$order_name."','".$order_price."')"))
    {
        echo "<h2> Submission Successful...</h2>";

    }


}



function addmoney()
{
    include 'db.php';
    $newAmount = $_POST['newamount'];



    if(mysqli_query($con,"INSERT INTO signups(cus_id,name,location,pho_num,item,order_name,price)
    VALUES('".$cus_id."','".$name."','".$location."','".$phonum."','".$cate."','".$order_name."','".$order_price."')"))
    {
        echo "<h3> Submission Successfull...</h3>";
    }
}


function live()
{
    include 'db.php';

    $value = $_POST['cid'];
    
    $sele = mysqli_query($con,"SELECT * FROM signups where cus_id = '$value' ");

    while ($row = mysqli_fetch_array($sele)) {
        
        echo '<div class="">

                  <div class="gr1"><span id="d1">Customer Name :</span> '.$row['name'].'</div>
                  <div class="gr1"><span id="d1">Customer Location :</span> '.$row['location'].'</div>
                  <div class="gr1"><span id="d1">Customer Number :</span> '.$row['pho_num'].'</div>
                  <div class="gr1"><span id="d1">Item Type :</span> '.$row['item'].'</div>
                  <div class="gr1"><span id="d1">Item :</span> '.$row['order_name'].'</div>
                  <div class="gr1"><span id="d1">Item Price :</span> '.$row['price'].'</div>
                  <div class="gr1"><span id="d1">Date Item was bought :</span> '.$row['date'].'</div>
                  <div class="gr1"><span id="d1">Sales Person :</span> Kofi Manu </div>
                  <div class="gr1"><input type="text" class="inp" name="phonum" id="" placeholder="Phone Number"> </div>

               </div>' ;
    }

}