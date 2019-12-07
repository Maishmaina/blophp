
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php") ;?>
<?php require_once("include/DB.php"); ?>
<?php Confirm_Login(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CMS</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css"><!--webfont-->
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/all.js"></script><!--webfont-->
</head>
<body>
  <!--######################################naviagtion bar start##############################################-->
  <div style=" height:10px; background:#27aae1;"></div>
  <nav class=" navbar navbar-expand-lg navbar-dark bg-secondary" role="navigation">
  <div class="container">
  <div class="navbar-header" >
   <a class="navbar-brand" href="#">
    <img style="border-radius:20px;" src="image\images.png" alt="header" width="250px" height="40px">
  </a></div>    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active mx-2">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="Blog.php?Page=0">Blog</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Features</a>
        </li>
  </ul>
  <form action="Blog.php" class="form-inline  my-lg-0">
        <input class="form-control " type="text" placeholder="Search" name="Search">
        <button class="btn btn-outline-white " name="SearchButton">Search</button>
      </form>
  </div>
  </nav><div style=" height:10px; background:#27aae1;"></div>
  <!--######################################End of the naviagtion bar##############################################-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
      <div class="row">

  <div class=" col-sm-12 my-3 py-2 mr-1 bg-primary" id="sidemenu"><i class="fa fa-tachometer-alt fa-1x"></i>&nbsp;<a class="text-white" href="#">Dashboard </a></div></div>
 <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light"  id="sidemenu"><i class="fa fa-ad fa-1x"></i>&nbsp;<a class="text-white" href="AddNewPost.php">Add New Post</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-layer-group"></i>&nbsp;<a class="text-white" href="Categories.php">Category</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-user-lock"></i>&nbsp;<a class="text-white" href="Admins.php">Manage Admins</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-comment-alt"></i>&nbsp;<a class="text-white" href="Comments.php">Comment
    <?php
    $select;
    $QueryAllUnApproved="SELECT COUNT(*) FROM comments WHERE status='OFF'";
    $ExecuteAllUnApproved=mysqli_query($Connection,$QueryAllUnApproved);
    $RowsAllUnApproved=mysqli_fetch_array($ExecuteAllUnApproved);
    $TotalAllUnApproved=array_shift($RowsAllUnApproved);
    if($TotalAllUnApproved>0){
    ?>
    <div class="btn-group float-right" role="group" aria-label="Third group">
      <button type="button" class="btn btn-warning btn-sm">
    <?php
    echo $TotalAllUnApproved;?>
    </button></div>
    <?php } ?>
  </a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fab fa-blogger"></i>&nbsp;<a class="text-white" href="Blog.php">Live Bolg</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu"><i class="fas fa-sign-out-alt"></i>&nbsp;<a class="text-white"  href="Logout.php">Logout</a></div></div>

</div><!--End side bar-->
      <div class="col-sm-10 " style=" height: 500px; overflow-y: scroll;">
        <div  class="row"><div class="col-sm-12"> <?php echo Message() ; echo SuccessMessage(); ?> </div></div>
        <div class="row"><div class="col-md-6"><img src="Upload/develop.jpg" class="img-fluid rounded-circle" width="50px" height="50px">
          <p class="text-danger"> Welcome <?php echo $_SESSION["Username"];?></p></div>
          <div class="col-md-6"> <h1 class="text-right">Admin Dashboard</h1>
        </div></div>

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <tr>
              <th>No</th>
              <th>Post Title</th>
              <th>Date & Time</th>
              <th>Author</th>
              <th>Category</th>
              <th>Banner</th>
              <th>Comment</th>
              <th>Action</th>
              <th>Detail</th>
            </tr>
<?php
$Select;
$ViewQuery="SELECT * FROM admin_panel ORDER BY id desc";
$tryOut= mysqli_query($Connection,$ViewQuery);
$SrNo=0;
while($DataRows=mysqli_fetch_array($tryOut)){
  $Id=$DataRows["id"];
  $DateTime=$DataRows["datetimes"];
  $Title=$DataRows["title"];
  $Category=$DataRows["category"];
  $Admin=$DataRows["author"];
  $Image=$DataRows["image"];
  $Post=$DataRows["post"];
  $SrNo++;
?>
<tr>
<td> <?php echo $SrNo; ?> </td>
<td> <?php
if(strlen($Title)>5){$Title=substr($Title,0,5).'..';}
echo $Title; ?> </td>
<td> <?php
if(strlen($DateTime)>10){$DateTime=substr($DateTime,0,10).'..';}
 echo  $DateTime; ?> </td>
<td> <?php
if(strlen($Admin)>7){$Admin=substr($Admin,0,7).'..';}
 echo $Admin;?> </td>
<td> <?php
if(strlen($Category)>7){$Category=substr($Category,0,7).'..';}
 echo $Category;?> </td>
<td><img src="Upload/<?php echo $Image;?>" width="170px" height="50px"> </td>
<td> <?php
$select;
$QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='ON'";
$ExecuteApproved=mysqli_query($Connection,$QueryApproved);
$RowsApproved=mysqli_fetch_array($ExecuteApproved);
$TotalApproved=array_shift($RowsApproved);
if($TotalApproved>0){
?>
<div class="btn-group float-right" role="group" aria-label="Third group">
  <button type="button" class="btn btn-success btn-sm">
<?php
echo $TotalApproved;?>
</button></div>
<?php } ?>
<?php
$select;
$QueryUnApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='OFF'";
$ExecuteUnApproved=mysqli_query($Connection,$QueryUnApproved);
$RowsUnApproved=mysqli_fetch_array($ExecuteUnApproved);
$TotalUnApproved=array_shift($RowsUnApproved);
if($TotalUnApproved>0){
?>
<div class="btn-group" role="group" aria-label="Third group">
  <button type="button" class="btn btn-danger btn-sm">
<?php
echo $TotalUnApproved;?>
</button></div>
<?php } ?>
</td>
<td>
  <a href="EditPost.php?Edit=<?php echo $Id; ?> ">
    <span class="btn btn-warning">Edit</span>
  </a>
    <a href="DeletePost.php?Delete=<?php echo $Id; ?> " class="delete" >
      <span class="btn btn-danger">Delete</span>
    </a></td>
<td><a href="FullPost.php?id=<?php echo $Id; ?>" target="_blank">
  <span class="btn btn-info"> Live Preview</span></a> </td>
</tr>

<?php } ?>


          </table>
        </div>
      </div><!--End main bar-->
    </div><!--End row bar-->
  </div><!--End container bar-->
  <div id="footer">
    <footer class="page-footer font-small text-white" style="background:#1a1a1a;">
    <div style="background-color: #6351ce;">
      <div class="container">


            <div class="row py-4 d-flex align-items-center">


<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">  <h6 class="mb-0">Get connected with us on social networks!</h6>
</div><div class="col-md-6 col-lg-7 text-center text-md-right">
<a class="fb-ic"> <i class="fab fa-facebook white-text mr-4"> </i></a><a class="tw-ic"> <i class="fab fa-twitter white-text mr-4"> </i></a>
<a class="gplus-ic"><i class="fab fa-google-plus white-text mr-4"> </i></a><a class="li-ic"> <i class="fab fa-linkedin white-text mr-4"> </i> </a>
<a class="ins-ic"> <i class="fab fa-instagram white-text"> </i></a>  </div>
</div> </div></div><!--upperdivision-->
  <div class="container text-center text-md-left mt-5"><div class="row mt-3">
<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

<h6 class="text-uppercase font-weight-bold">Company X</h6> <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ad, sed provident quod cupiditate tempore ipsa qui expedita necessitatibus quisquam!</p>
</div><div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
 <h6 class="text-uppercase font-weight-bold">Products</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><a href="#!">Bootstrap</a></p><p><a href="#!">WordPress</a> </p> <p><a href="#!">Tutorials</a></p><p><a href="#!">Books</a></p>
</div>
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
<h6 class="text-uppercase font-weight-bold">Useful links</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
 <p> <a href="#!">Your Account</a></p><p><a href="#!">Become an Affiliate</a></p><p><a href="#!">Shipping Rates</a>
</p><p><a href="#!">Help</a></p></div>
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
<h6 class="text-uppercase font-weight-bold">Contact</h6><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
<p><i class="fa fa-home mr-3"></i> Karatina,ISO 9001:2008 , KENYA</p><p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
<p><i class="fa fa-phone mr-3"></i> + 254 555 444</p>
</div>
</div></div><!--midle division-->

<div class="footer-copyright text-center py-3" style="background-color: #0d0d0d; ">© 2018 Copyright:
<a href="#!">DEMO.com</a></div></footer>
</div><!--end of the footer!-->

<script type="text/javascript" src="js/bootstrapjquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('THIS FUNCTION IS TO HAZADIOUS AND, YOU WILL LOSS DATA?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

</body>
</html>
