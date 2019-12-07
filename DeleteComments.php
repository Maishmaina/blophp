<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("Include/DB.php") ;?>
<?php
 Confirm_Login(); 
if(isset($_GET["id"])){
  $IdFromURL=$_GET["id"];
  $Select;
  $Query="DELETE FROM comments WHERE id='$IdFromURL'";
  $tryOut=mysqli_query($Connection,$Query);
   if($tryOut){
     $_SESSION["SuccessMessage"]="Comment Deleted Successfuly";
     Redirect_to("Comments.php");
   }else{$_SESSION["ErrorMessage"]="Comment was not deleted ";
   Redirect_to("Comments.php");

   }
}

 ?>
