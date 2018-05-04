<?php
$state = $_SESSION["state"] ;
$name = $_SESSION["name"] ;
$reg = $_SESSION["reg"] ;

 if ($reg == 1337)
 {
   echo ("<center>Der Status war: ".$state." <br /></center>");
   echo ("<center>Danke ".$name." fürs Registrieren! <br /></center>") ;
$_SESSION["reg"] = 0;
}



 ?>
