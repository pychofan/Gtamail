<?php
session_start();
$name = $_POST["name"] ;
$pass = $_POST["pass"] ;
$mail = $_POST["mail"] ;

echo $name ;
echo $pass ;
echo $mail ;
$_SESSION["name"] = $name;
$_SESSION["state"] = true;
$_SESSION["reg"] = 1337 ;
sleep(2);
header('location: login.php');



?>
