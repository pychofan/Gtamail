<link href="login.css" rel="stylesheet">
<?php
session_start();
include 'success.php' ;

?>
<div class='container'>
  <h2>oder <a href='register.html'>Registrieren</a></h2>
  <div class='form'>
    <form action="login.php" method="post">
    <label for='bild' >E-Mail: </label>
    <input type="text" name='mail' id='mail' value="" />
    <label for='bild' >Passwort: </label>
    <input type='password' name='pass' id='pass' value='' />
    <input type='submit' value='Login' />
  </form>
  </div>
</div>
<?php
$login_pass = $_POST["pass"] ;
$login_mail = $_POST["mail"] ;

if ($login_pass == "maxim" && $login_mail == "test@mail.ls") {

echo "geht";
}






 ?>
