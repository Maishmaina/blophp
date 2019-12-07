<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("Include/DB.php") ;?>
<?php
if(isset($_GET["id"])){//getting conntent from the db.
  $IdFromURL=$_GET["id"];//with the id in the URL.
  $Select;//selecting the db i created.
  $Query="DELETE FROM registration WHERE id='$IdFromURL'";
  $tryOut=mysqli_query($Connection,$Query);
   if($tryOut){
     $_SESSION["SuccessMessage"]="Admin Deleted Successfuly";
     Redirect_to("Admins.php");
   }else{$_SESSION["ErrorMessage"]=" Something wrog happened was not deleted ";
   Redirect_to("Admins.php");

   }
}

 ?>
