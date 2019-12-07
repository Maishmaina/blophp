<?php require_once("Include/DB.php") ?>
<?php require_once("Include/Sessions.php") ?>
<?php require_once("Include/Functions.php") ?>
<?php
   if(isset($_POST["Submit"])){
     $Title=($_POST["Title"]);
     $Category=($_POST["Category"]);
     $Post=($_POST["Post"]);
     date_default_timezone_set("Africa/Nairobi");
     $today = date("F j, Y, g:i a");
     $today;
     $Admin=$_SESSION["Username"];
     $Image=$_FILES["Image"]["name"];
     $Target="Upload/".basename($_FILES["Image"]["name"]);
      if(empty($Title)){
        $_SESSION["ErrorMessage"] = "Title should be filled";
        Redirect_to("AddNewPost.php");
      } else if(strlen($Title) < 2){
        $_SESSION["ErrorMessage"] = "Title should be atleast 2 characters";
        Redirect_to("AddNewPost.php");
      }else{
        global $Select;
        $EditFromURL=$_GET['Edit'];
        $Query="UPDATE admin_panel SET datetimes='$today',title='$Title',
        category='$Category',author='$Admin',image='$Image',post='$Post'
        WHERE id='$EditFromURL'";
        $tryOut=mysqli_query($Connection, $Query);
        move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
        if($tryOut){
          $_SESSION["SuccessMessage"] = "Post Updated Successfuly";
          Redirect_to("Simple.php");
        }else{
          $_SESSION["ErrorMessage"] = " Failed to Update the Post";
          Redirect_to("Simple.php");
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
  <title>Edit Post</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css"><!--webfont-->
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/all.js"></script><!--webfont-->
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
      <div class="row">

  <div class=" col-sm-12 my-3 py-2 mr-1 text-light sidemenu" id="sidemenu"><i class="fa fa-tachometer-alt fa-1x"></i>&nbsp;<a class="text-white" href="#">Dashboard </a></div></div>
 <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light bg-primary"  id="sidemenu"><i class="fa fa-ad fa-1x"></i>&nbsp;<a class="text-white" href="AddNewPost.php">Add New Post</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-layer-group"></i>&nbsp;<a class="text-white" href="Categories.php">Categories</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-user-lock"></i>&nbsp;<a class="text-white" href="#">Manage Admins</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fa fa-comment-alt"></i>&nbsp;<a class="text-white" href="#">Comment</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu" ><i class="fab fa-blogger"></i>&nbsp;<a class="text-white" href="#">Live Bolg</a></div></div>
  <div class="row"><div class="col-sm-12 sidemenu my-3 py-2 mr-1 text-light" id="sidemenu"><i class="fas fa-sign-out-alt"></i>&nbsp;<a class="text-white"  href="#">Logout</a></div></div>

</div><!--End side bar-->
      <div class="col-sm-10 ">
        <h1>Update Post</h1>
        <div  class="row"><div class="col-sm-12"> <?php echo Message(); ?> </div></div>
        <div  class="row"><div class="col-sm-12"> <?php echo SuccessMessage() ; ?> </div></div>
  <div class="card" > <div class="card-body">
    <?php
  $SearchQueryParameter=$_GET['Edit'];
  $Select;
  $Query="SELECT * FROM admin_panel WHERE id='$SearchQueryParameter'";
  $tryOut=mysqli_query($Connection,$Query);
  while($DataRows=mysqli_fetch_array($tryOut)){
    $TitleToBeUpdated=$DataRows['title'];
    $CategoryToBeUpdated=$DataRows['category'];
    $ImageToBeUpdated=$DataRows['image'];
    $PostToBeUpdated=$DataRows['post'];
  }
     ?>
    <form  action="EditPost.php?Edit=<?php echo $SearchQueryParameter; ?>" method="post" enctype="multipart/form-data">
      <fieldset>
        <div class="form-group">
          <label for="title">Title:</label>
          <div class="input-group align-self-center"><div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                    <i class="fas fa-prescription-bottle-alt"></i>
                  </span>
                  </div>
        <input value="<?php echo $TitleToBeUpdated; ?> " class="form-control form-control-lg" type="text" name="Title" id="title" placeholder="Title">
      </div></div>
            <div class="form-group">
            <span class="">Existing Category</span>
            <?php echo $CategoryToBeUpdated; ?> <br>
              <label for="categoryselect">Category:</label>
              <div class="input-group align-self-center"><div class="input-group-prepend">
                        <span class="input-group-text" id="input-text">
                        <i class="fas fa-check"></i>
                      </span>
                      </div>
              <select class="form-control form-control-lg" name="Category" id="categoryselect">

                <?php
             global $Select;
             $ViewQuery="SELECT * FROM category ORDER BY id desc";
             $tryOut=mysqli_query($Connection,$ViewQuery);
             while($DataRows=mysqli_fetch_array($tryOut)) {
               $Id=$DataRows["id"];
               $CategoryName=$DataRows["name"];

                   ?>
                        <option> <?php echo $CategoryName; ?> </option>
                  <?php }  ?>
              </select>
            </div> </div>
            <div class="form-group">
              <span class="">Existing Image</span>
              <img src="Upload/<?php echo $ImageToBeUpdated; ?>" width="170px" height="50"><br>
              <label for="imageselect">Select image:</label>
              <div class="input-group align-self-center"><div class="input-group-prepend">
                        <span class="input-group-text" id="input-text">
                        <i class="fas fa-images"></i>
                      </span>
                      </div>
              <input  class="form-control form-control-lg" type="File" name="Image" id="imageselect">
            </div></div>
            <div class="form-group">
              <label for="postarea">Post:</label>
              <div class="input-group align-self-center"><div class="input-group-prepend">
                        <span class="input-group-text" id="input-text">
                        <i class="fas fa-paste"></i>
                      </span>
                      </div>
                <textarea class="form-control" name="Post" id="postarea">
                  <?php echo $PostToBeUpdated; ?>
                </textarea>
            </div></div>
            <br>

            <button  class="btn btn-outline-success btn-block form-control" type="Submit" name="Submit" value="Add New Category"><i class="far fa-hand-point-right mr-2"> </i> Update Post</button>

      </fieldset>
      <br>
    </form>
  </div>
    </div>
      </div><!--End main bar-->
    </div><!--End row bar-->
  </div><!--End container bar-->
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

<h6 class="text-uppercase font-weight-bold">Story Company</h6> <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
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
<a href="#!">Story.com</a></div></footer>
</div><!--end of the footer!-->

<script type="text/javascript" src="js/bootstrapjquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
