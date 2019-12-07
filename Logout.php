<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php") ;?>
<?php
$_SESSION["User_Id"]=null;
 Session_destroy();
 Redirect_to("login.php");
 ?>
