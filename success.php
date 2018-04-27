<link href="login.css" rel="stylesheet">
<?php
session_start();

$state = $_SESSION["state"] ;
$name = $_SESSION["name"] ;


echo ("<center>Der Status war: ".$state." <br /></center>");

echo ("<center>Danke ".$name." fürs Registrieren! <br /></center>") ;

sleep(30);
header('location: login.php');




 ?>
