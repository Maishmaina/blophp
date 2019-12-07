<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("Include/DB.php") ;?>
<?php Confirm_Login(); ?>
<?php
if(isset($_GET["id"])){
  $IdFromURL=$_GET["id"];
  $Select;
  $Admin=$_SESSION["Username"];
  $Query="UPDATE comments SET status='ON',approvedby='$Admin' WHERE id='$IdFromURL'";
  $tryOut=mysqli_query($Connection,$Query);
   if($tryOut){
     $_SESSION["SuccessMessage"]="Comment Approved Successfuly";
     Redirect_to("Comments.php");
   }else{$_SESSION["ErrorMessage"]="Something wrong happend ";
   Redirect_to("Comments.php");

   }
}

 ?>
