<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php") ;?>
<?php require_once("Include/Functions.php") ;?>
<?php
   if(isset($_POST["Submit"])){
     $Username=($_POST["UserName"]);
     $Password=($_POST["Password"]);
      if(empty($Username)||empty($Password)){
        $_SESSION["ErrorMessage"] = "All Field Must be filled";
        Redirect_to("login.php");
      }

      else{

      $Your_Account=Login_Attempt($Username,$Password);
      $_SESSION["User_Id"]=$Your_Account["id"];//create session for the user using primary key!
 	    $_SESSION["Username"]=$Your_Account["username"];//the use their name.
        if($Your_Account){ $_SESSION["SuccessMessage"]="Welcome  {$_SESSION["Username"]} ";
	Redirect_to("Simple.php");}else{
  $_SESSION["ErrorMessage"]="Invalid Username Or Password";
	Redirect_to("login.php");
	}
      }
      }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>registration</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css"><!--webfont-->
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/all.js"></script><!--webfont-->
<style>
*{margin:0px;padding:0px;}
body{font-size:120%;background:#f8f8ff;}
.header{width:40%;margin:50px auto 0px;color:white;background:#5f8ea0;text-align:center;border:1px solid #b0c4de;
border-bottom:none;border-radius:10px 10px 0px 0px;padding:20px;
}
form{width:40%;margin:0px auto;border:1px solid #B0c4de;background: white;border-radius: 0px 0px 10px 10px;}
</style>
</head>
<body>
<div class=" header">
  <div  class="row"><div class="col-sm-12"> <?php echo Message(); ?> </div></div>
  <div  class="row"><div class="col-sm-12"> <?php echo SuccessMessage() ; ?> </div></div>
<h2>Login</h2>
 <div style="border-radius: 50%; background: red; width:70px; height:80px;" class="mx-auto"><i class="fas fa-user-tie fa-3x"></i></div>
</div>
<form  action="login.php" method="post">
  <div class="col-md-8 mb-3">
      <label for="username">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-user"></i></span>
        </div>
        <input class="form-control" type="text" name="UserName" id="UserName" placeholder="UserName">
      </div>
    </div>

    <div class="col-md-8 mb-3">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-key"></i></span>
          </div>
          <input class="form-control" type="password" name="Password" id="Password" placeholder="Password">
        </div>
      </div>
  <div class="col-md-4 mb-3">
     <button class="btn btn-success" type="Submit" name="Submit">Login</button></div>
</form>
<script type="text/javascript" src="js/bootstrapjquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
