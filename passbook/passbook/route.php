<?php
session_start();

include 'engine.php';

$function = $_GET['func'];

if (function_exists($function)){
    $function();
}else{
    echo '<script> window.location.href="error.php" </script>';
}
