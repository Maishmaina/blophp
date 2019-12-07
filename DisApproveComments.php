<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("Include/DB.php") ;?>
<?php
if(isset($_GET["id"])){
  $IdFromURL=$_GET["id"];
  $Select;
  $Query="UPDATE comments SET status='OFF' WHERE id='$IdFromURL'";
  $tryOut=mysqli_query($Connection,$Query);
   if($tryOut){
     $_SESSION["SuccessMessage"]="Comment Approved Successfuly";
     Redirect_to("Comments.php");
   }else{$_SESSION["ErrorMessage"]="Somethig wrong happend";
   Redirect_to("Comments.php");

   }
}

 ?>
