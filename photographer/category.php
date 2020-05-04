<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <style>
  	.box{
      width: 200px;
      height: 225px;
      margin:20px;
      float: left;    
      border:1.5px solid black;
      border-radius: 5px;
      text-align:center;     
      box-shadow: 1px 2px 12px black;
      font-size: 20px;
      padding-top: 10px;
      line-height: 1.5;
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
    }
    .box:hover{box-shadow: 1px 1px 18px #002bff;}
 	a{text-decoration:none;color: #0e91d0; }  a:hover{color: #2eb900; text-shadow: 0px 0px 0.5px #0e91d0}
    .textbox{
      font-family: arial;
      float: left!important;
      height: 21px!important;
      width:150px;
      font-size:20px;
      padding:5px;
      padding-left: 7px;
      margin:5px 0px 5px 5px;
      border: 1px solid white;
      border-radius:5px 0px 0px 5px;
      position: initial;
      opacity: 1;
      -webkit-transition: width 0.2s ease-in-out;
        transition: width 0.2s ease-in-out;
    }
    .textbox:focus{
      width:300px;
      outline: none;
      border: 1px solid white!important;
      background-color: white!important;
    }

  </style>
</head>

<body>

<?php   include "header.php";   ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php" style="color: #2cbaff;background-color: #1d1d1d">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>
<div style="padding:20px;height:230px;">
  <center>
  <br><br><br><br><a style="line-height: 2;color: orange;font-size: 48px;" href="">Coming Soon</a></div>
</center>
</div>

<div style="margin-top: 143px">
<?php   include "footer.php";  ?>             <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
