<?php require_once("Include/DB.php") ?>
<?php require_once("Include/Sessions.php") ?>
<?php require_once("Include/Functions.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css"><!--webfont-->
  <link rel="stylesheet" href="css/public.css">
  <script src="js/all.js"></script><!--webfont-->
  <style type="text/css">
  /*animation and effect on the header parts.*/
  .more-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
  .more-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0; }
  .more-card-4{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
  .more-animate-zoom {animation:animatezoom 2s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
  .more-animate-rotate {animation:spin 1s 0.5 linear}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}
  .more-animate-top{position:relative;animation:animatetop 3s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
  .more-animate-bottom{position:relative;animation:animatebottom 3s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
  .more-animate-opacity{animation:opac 3s}@keyframes opac{from{opacity:0} to{opacity:1}}
  .more-white{color:#000!important;background-color:#fff!important}
  </style>
</head>
<body style="background-color:#c6d9ec;">
  <!--##########################js function that will help user go back to the top! ##########################################################-->
  <script type="text/javascript">
  window.onscroll = function()  {scrollMe()};
  function scrollMe(){if(document.body.scrollTop > 35 || document.documentElement.scrollTop > 35)
  { document.getElementById("meTop").style.display = "block";} else{document.getElementById("meTop").style.display = "none"; } }
  function toTop(){document.body.scrollTop = 0; document.documentElement.scrollTop = 0;}
  </script>
  <!--#################### navbar start hear ################################-->
<div style=" height:10px; background:#27aae1;"></div>
<nav class=" navbar navbar-expand-lg navbar-dark bg-secondary" role="navigation">
<div class="container">
<div class="navbar-header" >
 <a class="navbar-brand" href="#">
  <img style="border-radius:20px;" src="image\images.png" alt="header" width="250px" height="40px">
</a></div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mx-2">
        <a class="nav-link" href="Blog.php?Page=0">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link" href="#" onclick="document.getElementById('hindingmore1').style.display='block'">Blog</a>
      </li>
      <!--notification for Blog............................................................-->
      <div  class="more-modal" id="hindingmore1"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-zoom" style="margin:20px;">
      <div class="more-white">
        <button class="btn btn-success float-right" type="button" onclick="document.getElementById('hindingmore1').style.display='none'"><i class="fas fa-window-close"></i></button>
        <p class="pt-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum ab facere consectetur hic optio, est, odio aut similique fugit provident cupiditate rerum. Doloremque voluptas voluptatum nostrum quam vero adipisci iure animi blanditiis dolores, ipsum error quo at libero nesciunt, magnam reprehenderit, totam tempore nam quisquam accusantium dolor esse excepturi. Reiciendis, commodi! Perferendis voluptatem cupiditate dolorum dolores provident ad, maxime commodi dolore illo ipsum accusamus molestiae ea quaerat adipisci repellat debitis nulla culpa voluptates delectus, eaque expedita, id. Velit magni, magnam, voluptas ea fuga excepturi deserunt! Consectetur odit iure dolores similique dolor nemo consequatur eaque doloribus,
           hic aliquid eveniet quo.</p>
      </div></div></div>
      <li class="nav-item mx-2">
        <a class="nav-link" href="#" onclick="document.getElementById('hindingmore2').style.display='block'">About</a>
      </li>
      <!--notification for Blog............................................................-->
      <div  class="more-modal" id="hindingmore2"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-rotate" style="margin:20px;">
      <div class="more-white">
        <button class="btn btn-success float-right" type="button" onclick="document.getElementById('hindingmore2').style.display='none'"><i class="fas fa-window-close"></i></button>
        <p class="pt-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum ab facere consectetur hic optio, est, odio aut similique fugit provident cupiditate rerum. Doloremque voluptas voluptatum nostrum quam vero adipisci iure animi blanditiis dolores, ipsum error quo at libero nesciunt, magnam reprehenderit, totam tempore nam quisquam accusantium dolor esse excepturi. Reiciendis, commodi! Perferendis voluptatem cupiditate dolorum dolores provident ad, maxime commodi dolore illo ipsum accusamus molestiae ea quaerat adipisci repellat debitis nulla culpa voluptates delectus, eaque expedita, id. Velit magni, magnam, voluptas ea fuga excepturi deserunt! Consectetur odit iure dolores similique dolor nemo consequatur eaque doloribus,
           hic aliquid eveniet quo.</p>
      </div></div></div>
      <li class="nav-item mx-2">
        <a class="nav-link" href="#" onclick="document.getElementById('hindingmore3').style.display='block'">Services</a>
      </li>
      <!--notification for Blog............................................................-->
      <div  class="more-modal" id="hindingmore3"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-bottom" style="margin:20px;">
      <div class="more-white">
        <button class="btn btn-success float-right" type="button" onclick="document.getElementById('hindingmore3').style.display='none'"><i class="fas fa-window-close"></i></button>
        <p class="pt-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum ab facere consectetur hic optio, est, odio aut similique fugit provident cupiditate rerum. Doloremque voluptas voluptatum nostrum quam vero adipisci iure animi blanditiis dolores, ipsum error quo at libero nesciunt, magnam reprehenderit, totam tempore nam quisquam accusantium dolor esse excepturi. Reiciendis, commodi! Perferendis voluptatem cupiditate dolorum dolores provident ad, maxime commodi dolore illo ipsum accusamus molestiae ea quaerat adipisci repellat debitis nulla culpa voluptates delectus, eaque expedita, id. Velit magni, magnam, voluptas ea fuga excepturi deserunt! Consectetur odit iure dolores similique dolor nemo consequatur eaque doloribus,
           hic aliquid eveniet quo.</p>
      </div></div></div>
      <li class="nav-item mx-2">
        <a class="nav-link" href="#" onclick="document.getElementById('hindingmore4').style.display='block'">Contact Us</a>
      </li>
      <!--notification for Blog............................................................-->
      <div  class="more-modal" id="hindingmore4"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-opacity" style="margin:20px;">
      <div class="more-white">
        <button class="btn btn-success float-right" type="button" onclick="document.getElementById('hindingmore4').style.display='none'"><i class="fas fa-window-close"></i></button>
        <p class="pt-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum ab facere consectetur hic optio, est, odio aut similique fugit provident cupiditate rerum. Doloremque voluptas voluptatum nostrum quam vero adipisci iure animi blanditiis dolores, ipsum error quo at libero nesciunt, magnam reprehenderit, totam tempore nam quisquam accusantium dolor esse excepturi. Reiciendis, commodi! Perferendis voluptatem cupiditate dolorum dolores provident ad, maxime commodi dolore illo ipsum accusamus molestiae ea quaerat adipisci repellat debitis nulla culpa voluptates delectus, eaque expedita, id. Velit magni, magnam, voluptas ea fuga excepturi deserunt! Consectetur odit iure dolores similique dolor nemo consequatur eaque doloribus,
           hic aliquid eveniet quo.</p>
      </div></div></div>
      <li class="nav-item mx-2">
        <a class="nav-link" href="#" onclick="document.getElementById('hindingmore5').style.display='block'">Features</a>
      </li>
      <!--notification for Blog............................................................-->
      <div  class="more-modal" id="hindingmore5"> <!--see more hear-->
      <div class="more-modal-content more-card-4 more-animate-top" style="margin:20px;">
      <div class="more-white">
        <button class="btn btn-success float-right" type="button" onclick="document.getElementById('hindingmore5').style.display='none'"><i class="fas fa-window-close"></i></button>
        <p class="pt-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum ab facere consectetur hic optio, est, odio aut similique fugit provident cupiditate rerum. Doloremque voluptas voluptatum nostrum quam vero adipisci iure animi blanditiis dolores, ipsum error quo at libero nesciunt, magnam reprehenderit, totam tempore nam quisquam accusantium dolor esse excepturi. Reiciendis, commodi! Perferendis voluptatem cupiditate dolorum dolores provident ad, maxime commodi dolore illo ipsum accusamus molestiae ea quaerat adipisci repellat debitis nulla culpa voluptates delectus, eaque expedita, id. Velit magni, magnam, voluptas ea fuga excepturi deserunt! Consectetur odit iure dolores similique dolor nemo consequatur eaque doloribus,
           hic aliquid eveniet quo.</p>
      </div></div></div>
</ul>
<form action="Blog.php" class="form-inline  my-lg-0">
      <input class="form-control " type="text" placeholder="Search" name="Search">
      <button class="btn btn-outline-white " name="SearchButton"><i class="fas fa-search"></i></button>
    </form>
</div>
</nav><div style=" height:10px; background:#27aae1;"></div>
<!--####################End of the navbar ################################-->
<!--####################containing col8 and col3 start ################################-->
<div class="container">
  <div class="blog-header">
    <h1>The Class Information Dictonary Blog</h1>
    <p class="lead">Find All In One... "A Day Without laughter Is A Day Wasted! "</p>
  </div>
  <div class="row">
    <div class="col-md-8">
      <h2>The Elit d'information @2016. post</h2>
      <?php
      global $Select;//selecting table in the database
      if(isset($_GET["SearchButton"])){//search query.
        $Search=$_GET["Search"];
        $ViewQuery="SELECT * FROM admin_panel
		WHERE datetimes LIKE '%$Search%' OR title LIKE '%$Search%'
		OR category LIKE '%$Search%' OR post LIKE '%$Search%' ORDER BY id desc";
  }//query when the category is active.
  elseif (isset($_GET["Category"])) {
    $Category=$_GET["Category"];
    $ViewQuery = "SELECT * FROM admin_panel WHERE category='$Category' ORDER BY id desc";
  }elseif (isset($_GET["Page"])) {//pagination query and algorithm.
    $Page=$_GET["Page"];
    if($Page==0 || $Page < 1){
      $ShowPostPage=0;
    }else{$ShowPostPage=($Page*3)-3;}

    $ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT $ShowPostPage,3 ";
  }//default blog.
  else{
     $ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,3 ";}//for searching
      $tryOut=mysqli_query($Connection,$ViewQuery);
      while($DataRows=mysqli_fetch_array($tryOut)){
        $PostId=$DataRows["id"];
        $DateTime=$DataRows["datetimes"];
        $Title=$DataRows["title"];
        $Category=$DataRows["category"];
        $Admin=$DataRows["author"];
        $Image=$DataRows["image"];
        $Post=$DataRows["post"];

       ?>
       <div class="thumbnail blogpost">
         <img class="img-fluid rounded" src="Upload/<?php echo $Image;?>" style="width:100%; height:400px;" >
         <div class="caption">
           <h1 class="heading"> <?php echo htmlentities($Title); ?> </h1>
            <p class="description">Category: <?php echo htmlentities($Category); ?> -Published on <?php echo htmlentities($DateTime); ?>
              <?php
              $select;
              $QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$PostId' AND status='ON'";//count number of comment
              $ExecuteApproved=mysqli_query($Connection,$QueryApproved);
              $RowsApproved=mysqli_fetch_array($ExecuteApproved);
              $TotalApproved=array_shift($RowsApproved);//return the value{a number}...of the array
              if($TotalApproved>0){
              ?>
              <div class="btn-group float-right" role="group" aria-label="Third group">
                <button type="button" class="btn btn-secondary btn-sm">Comments
              <?php
              echo $TotalApproved;?>
              </button></div>
              <?php } ?>
             </p>
          <p class="Post"> <?php
          if(strlen($Post)>50){$Post=substr($Post,0,50).'...';}//the post will show only indicated words rest is inthe fullpost.
           echo $Post ?> </p>
         </div>
         <a href="FullPost.php?id=<?php echo $PostId; ?>"><span class="btn btn-outline-info float-right">
           Read More &rsaquo;&rsaquo;
         </span></a>
       </div>
     <?php } ?>
     <nav aria-label="Page navigation example">
     <ul class="pagination pagination-lg" style="float:left;">
    <?php
     if (isset($Page)){
     if($Page > 1) {  ?>
  <li class="page-item" >
     <a class="page-link" href="Blog.php?Page=<?php echo $Page-1; ?>"> Back</a></li>
   <?php } } ?>
       <?php
       global $Select;
          $QueryPagination="SELECT COUNT(*) FROM admin_panel";
          $tryPagination=mysqli_query($Connection,$QueryPagination);
          $RowPagination=mysqli_fetch_array($tryPagination);
           $TotalPage=array_shift($RowPagination);//total post.
           $PostPage=$TotalPage/3;//dividing pages
           $PostPage=ceil($PostPage);//give page an upper number.round off.
           for ($i=1; $i <=$PostPage ; $i++) {

      ?>
        <?php
      if (isset($Page)){
        if($i==$Page){ ?>
            <li class="page-item active" >
      <a class="page-link" href="Blog.php?Page=<?php echo $i; ?>" ><?php echo $i;?></a></li>
    <?php } else{ //make page number blue active above ?>
    <li class="page-item" >
<a class="page-link" href="Blog.php?Page=<?php echo $i; ?>" ><?php echo $i;?></a></li>

<?php } } } ?>
<?php
 if (isset($Page)){
 if($Page+1<= $PostPage) { //pagination above total page manager.  ?>
<li class="page-item" >
 <a class="page-link" href="Blog.php?Page=<?php echo $Page+1; ?>">Next </a></li>
<?php } } ?>

  </ul>
  </nav>
    </div><!--end of the main area-->
    <div class="col-md-offset-1 col-md-3 ml-5">
      <h1>About me</h1>
      <img  class="img-fluid" src="image\verses-on-love.jpg" alt="about me!" style="border-radius:50%;">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, facere quidem dicta ipsum cumque expedita eligendi dignissimos quaerat praesentium, odit accusantium soluta quas quisquam aperiam!
    <div class="card bg-secondary" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="card-header">
        Categories.
      </div>
      <div class="card-body">
        <?php
          global $Select;//side content for extracting the categories....
          $ViewCategory="SELECT * FROM category ORDER BY id desc";
          $tryCategory=mysqli_query($Connection,$ViewCategory);
          while($DataRows=mysqli_fetch_array($tryCategory)){
               $Id=$DataRows['id'];
               $Category=$DataRows['name'];
         ?>
         <a class="list-group-item list-group-item-action list-group-item-light" href="Blog.php?Category=<?php echo $Category;?>">
         <span> <?php echo $Category."<br>" ; ?></span></a>
       <?php }?>
      </div>
       <div class="card-footer">
         see all.
       </div>
    </div>

    <div class="card bg-secondary my-2 " style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="card-header">
        Recent Post.
      </div>
      <div class="card-body bg-light">
        <?php
        $Select;//for extracting recent post output title
        $ViewQuery="SELECT * FROM admin_panel ORDER BY id desc LIMIT 0,3";
        $tryPost=mysqli_query($Connection,$ViewQuery);
        while($DataRows=mysqli_fetch_array($tryPost)){
          $Id=$DataRows["id"];
          $Title=$DataRows["title"];
          $DateTime=$DataRows["datetimes"];
          $Image=$DataRows["image"];
          if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,11);}
               ?>

            <div >
              <img class="float-left" src="Upload/<?php echo $Image;?>" alt="" width="50px" height="50px">
             <a class="text-success" href="FullPost.php?id=<?php echo $Id; ?>">
               <p style="margin-left:90px;"><?php echo $Title;?></p></a>
             <p style="margin-left:90px;"><?php echo $DateTime;?></p>
            </div>
          <?php } ?>
      </div>
       <div class="card-footer">
         see all.
       </div>
    </div>

    </div><!--end of the side bar-->
  </div><!--end of row-->
</div><!--container-->
<!--####################End of col8 and col3###############################-->
<!--####################footer  ################################-->
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

<h6 class="text-uppercase font-weight-bold"> Story Company </h6> <hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ad, sed provident quod cupiditate!</p>
</div><div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
<h6 class="text-uppercase font-weight-bold">Products</h6><hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 75px;">
<p><a href="#!">Bootstrap</a></p><p><a href="#!">Tutorials</a></p><p><a href="#!">Books</a></p>
</div>
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
<h6 class="text-uppercase font-weight-bold">Useful links</h6><hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 95px;">
<p> <a href="#!">Your Account</a></p><p><a href="#!">Become an Affiliate</a></p><p><a href="#!">Help</a></p></div>
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
<h6 class="text-uppercase font-weight-bold">Contact</h6><hr class="bg-danger accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 75px;">
<p><i class="fa fa-home mr-3"></i> Karatina,KENYA</p><p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
<p><i class="fa fa-phone mr-3"></i> + 254 555 444</p>
</div>
</div></div><!--midle division-->

<div class="footer-copyright text-center py-3" style="background-color: #0d0d0d; ">© 2018 Copyright:
  <button class="buttontop" id="meTop" onclick="toTop()"
  style="
  position: fixed; bottom: 20px; right: 100px;z-index: 1; border:1px solid #000000; outline: none; background-color: #000000; color: white; cursor: pointer;
    padding:5px; border-radius:50%;"
  > <i class="fas fa-arrow-up"> </i></button>
<a href="#!">Story.com</a></div></footer>
</div>
<!--####################End of the footer ################################-->
<!--=====================give the user power to scroll to top.=================================================-->
  <script type="text/javascript" src="js/bootstrapjquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
