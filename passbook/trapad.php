<?php

$seventypercent = 456;
$result = 454;
$myid1= 'green';
$myid2= "blue";
$myid3= "orange";
$myid4= "yellow";
$myid5= "black";
$myid6= "pink";
$myid7= "violent";

while(1){

break;
$result = $result + 1;
if($result > $seventypercent){
    echo $myid1;
break;

}


$seventypercent = $seventypercent - 1;

if($result > $seventypercent){
    echo $myid2;
break;

}

$result = $result  -  1;

if($result > $seventypercent){
    echo $myid3 ;
break;

}

$result = $result -  1;
/*

if($result > $seventypercent){
    echo $myid4 ;
break;

}

$result = $result + 1;

if($result > $seventypercent){
    echo $myid5 ;
break;

}

$result = $result + 1;

if($result > $seventypercent){
    echo $myid6 ;
break;

}

$result = $result + 1;

if($result > $seventypercent){
    echo $myid7 ;

}
break;


$result = $result + 1;

if($result > $seventypercent){
    echo $myid8 ;
break;

}

$result = $result + 1;

if($result > $seventypercent){
    echo $myid ;
break;

}

$result = $result + 1;

if($result > $seventypercent){
    echo $myid ;
break;

}
*/
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form id="<?php echo $myid1 ?>" class="thisForm form" method="POST">
 <input type ="text" name="name"/>
</form>

<br>
<br>
<br>
<?php echo $result ?>
<br>
<br>
<?php echo $seventypercent ?>
<br>
</body>
</html>