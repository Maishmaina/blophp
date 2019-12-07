
<?php require_once("Include/Sessions.php") ?>
<?php

function Redirect_to($New_Location){
  header("Location:".$New_Location);
  exit;
}
function Login_Attempt($Username,$Password){
$conn =mysqli_connect("localhost","root","","phpcms");
    $Query =  " SELECT * FROM registration WHERE username='$Username' AND password='$Password'";

    $tryOut = $conn -> query($Query);

if($admin = $tryOut ->fetch_assoc()){
   return $admin;
  }else{return null;}


}
function Login(){
  if (isset($_SESSION["User_Id"])) {
    return true;
  }
}
function Confirm_Login(){
  if (!Login()) {
    $_SESSION["ErrorMessage"]="Please make sure you login!";
    Redirect_to("login.php");
  }
}
 ?>
