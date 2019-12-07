<?php require_once("Include/DB.php") ?>
<?php require_once("Include/Sessions.php") ?>
<?php require_once("Include/Functions.php") ?>
<?php Confirm_Login(); ?>
<?php
   if(isset($_POST["Submit"])){
     $Username=($_POST["UserName"]);
     $Password=($_POST["Password"]);
     //$Password=md5($myhash);
     date_default_timezone_set("Africa/Nairobi");
     $today = date("F j, Y, g:i a");
     $today;
     $Admin=$_SESSION["Username"];
      if(empty($Username)||empty($Password)){
        $_SESSION["ErrorMessage"] = "All Field Must be filled";
        Redirect_to("Admins.php");
      } else if(strlen($Password)<4){
        $_SESSION["ErrorMessage"] = "Not a strong password should be more than 4 characters";
        Redirect_to("Admins.php");
      }

      else{
        global $Select;
        $Query="INSERT INTO registration(datetimes,username,password,addedby)
        VALUES('$today','$Username','$Password','$Admin')";
        $tryOut=mysqli_query($Connection, $Query);
        if($tryOut){
          $_SESSION["SuccessMessage"] = "Admin Added Successfuly";
          Redirect_to("Admins.php");
        }else{
          $_SESSION["ErrorMessage"] = " Sorry! Failed to Add";
          Redirect_to("Admins.php");
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
  <title>Admins</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css"><!--webfont-->
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/all.js"></script><!--webfont-->
  <style type="text/css">
    .more-modal{z-index:3;display:none;padding-top:200px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4); }
  .more-modal-content{margin:auto;background-color:#fff;position:relative;padding-left:400px ;  outline:0; }
  .more-card-4{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
  .more-animate-zoom {animation:animatezoom 2s; -moz-animation:animatezoom 2s;}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}} @-moz-keyframe animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
  .more-white{color:#000!important;background-color:#fff!important}
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
      

  <div class="row"><div class=" col-sm-12 my-3 py-2 mr-1 sidemenu text-light" id="sidemenu"><i class="fa fa-tachometer-alt fa-1x"></i>&nbsp;<a class="text-white" href="#">Dashboard </a></div></div>
 <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light"  id="sidemenu"><i class="fa fa-ad fa-1x"></i>&nbsp;<a class="text-white" href="AddNewPost.php">Add New Post</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-layer-group"></i>&nbsp;<a class="text-white" href="Categories.php">Categories</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light bg-primary" id="sidemenu" ><i class="fa fa-user-lock"></i>&nbsp;<a class="text-white" href="Admins.php">Manage Admins</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-comment-alt"></i>&nbsp;<a class="text-white" href="#">Comment</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fab fa-blogger"></i>&nbsp;<a class="text-white" href="#">Live Bolg</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu"><i class="fas fa-sign-out-alt"></i>&nbsp;<a class="text-white"  href="#">Logout</a></div></div>
</div><!--End side bar-->
      <div class="col-sm-10 ">
        <h1>Manage Admins</h1>
        <div  class="row"><div class="col-sm-12"> <?php echo Message(); ?> </div></div>
        <div  class="row"><div class="col-sm-12"> <?php echo SuccessMessage() ; ?> </div></div>
  <div >
    <form  action="Admins.php" method="post">
      <fieldset>
        <div class="form-group">
          <label for="UserName">UserName:</label>
        <input class="form-control" type="text" name="UserName" id="UserName" placeholder="UserName">
            </div>
            <div class="form-group">
              <label for="Password">Password:</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Password">
                </div>
            <br>
            <input  class="btn btn-outline-success btn-block" type="Submit" name="Submit" value="Add New Admin">
      </fieldset>
      <br>
    </form>
  </div>
  <div class="table-responsive">
    <table class="table  table-hover">
      <tr class="table-secondary">
        <th>No.s</th>
        <th>Date And Time</th>
        <th>Admin Name</th>
        <th>Added By</th>
        <th>Actions</th>
      </tr>


      <?php
 global $Select;
 $ViewQuery="SELECT * FROM registration ORDER BY id desc";
 $tryOut=mysqli_query($Connection,$ViewQuery);
 $SrNo=0;
 while($DataRows=mysqli_fetch_array($tryOut)) {
   $Id=$DataRows["id"];
   $DateTime=$DataRows["datetimes"];
   $Username=$DataRows["username"];
   $Admin=$DataRows["addedby"];
    $SrNo++;
       ?>
       <tr class="table-info">
         <td> <?php echo $SrNo; ?> </td>
         <td> <?php echo $DateTime ;?> </td>
         <td> <?php echo $Username; ?> </td>
         <td> <?php echo $Admin ;?> </td>
         <td> <!--<a href="DeleteAdmin.php?id=<?php echo $Id;?>">
          <span class="btn btn-danger">delete</span> </a>-->
          <button class="btn btn-danger"><a class="text-white" href="#" onclick="document.getElementById('hindingmore-more').style.display='block'">Delete</a></button></td>
          

       </tr>
     <?php } ?>
    </table>
  </div>
</div>
      </div><!--End main bar-->
    </div><!--End row bar-->
  </div><!--End container bar-->
  <!--this make rthe start of the system buttn delete-->
  <div  class="more-modal" id="hindingmore-more"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-zoom" style="margin:20px;">
      <div class="more-white">
        <p class="align-items-center btn-danger color-white">Please Do you Want to Delete This Admin?</p>
        <button class="btn btn-success" type="button" onclick="document.getElementById('hindingmore-more').style.display='none'"><i class="fas fa-window-close"></i>No! Please Don't</button>
        <a href="DeleteAdmin.php?id=<?php echo $Id;?>"><button class="btn btn-danger" type="button" onclick="document.getElementById('hindingmore-more').style.display='none'"><i class="fas fa-window-close"></i> Delete now</button></a>

        
      </div></div></div>
  <!--This is the test for the pop up button.....-->
  <div id="footer">
    <footer class="page-footer font-small text-white" style="background:#1a1a1a;">
    <div style="background-color: #ff99cc;">
      <div class="container">


            <div class="row py-4 d-flex align-items-center">


<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">  <h6 class="mb-0">Get connected with us on social networks!</h6>
</div><div class="col-md-6 col-lg-7 text-center text-md-right">
<a href="#"> <i class="fab fa-facebook white-text mr-4"> </i></a><a href="#" > <i class="fab fa-twitter white-text mr-4"> </i></a>
<a href="#"><i class="fab fa-google-plus white-text mr-4"> </i></a><a href="#"> <i class="fab fa-linkedin white-text mr-4"> </i> </a>
<a href="#"> <i class="fab fa-instagram white-text"> </i></a>  </div>
</div> </div></div><!--upperdivision-->
  <div class="container text-center text-md-left mt-5"><div class="row mt-3">
<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

<h6 class="text-uppercase font-weight-bold">Social Bolg</h6> <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ad, sed provident quod cupiditate!</p>
</div><div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 <h6 class="text-uppercase font-weight-bold">Products</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><a href="#!">Bootstrap</a></p><p><a href="#!">Tutorials</a></p><p><a href="#!">Books</a></p>
</div>
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
<h6 class="text-uppercase font-weight-bold">Useful links</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
 <p> <a href="#!">Your Account</a></p><p><a href="#!">Become an Affiliate</a></p><p><a href="#!">Help</a></p></div>
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
<h6 class="text-uppercase font-weight-bold">Contact</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><i class="fa fa-home mr-3"></i> Karatina,KENYA</p><p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
<p><i class="fa fa-phone mr-3"></i> + 254 555 444</p>
</div>
</div></div><!--midle division-->

<div class="footer-copyright text-center py-3" style="background-color: #0d0d0d; ">© 2018 Copyright:
<a href="#!">Dante.com</a></div></footer>
</div><!--end of the footer!-->

<script type="text/javascript" src="js/bootstrapjquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
