<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("Include/DB.php") ;?>
<?php
if(isset($_GET["id"])){
  $IdFromURL=$_GET["id"];
  $Select;
  $Query="DELETE FROM category WHERE id='$IdFromURL'";
  $tryOut=mysqli_query($Connection,$Query);
   if($tryOut){
     $_SESSION["SuccessMessage"]="Category Deleted Successfuly";
     Redirect_to("Categories.php");
   }else{$_SESSION["ErrorMessage"]="Category was not deleted ";
   Redirect_to("Categories.php");

   }
}

 ?>
