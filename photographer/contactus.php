<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <title>Photography Zone</title>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  display: inline-block;
  font-family: helveticaneue 33thin;
}

.title {
  color: grey;
  font-size: 18px;
}
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
      width:297px;
      outline: none;
      border: 1px solid white!important;
      background-color: white!important;
    }
</style>
</head>
<body>
<?php include "header.php"; ?>
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0;"></c></a>

  <form><input type="text" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important;color: #2cbaff;background-color: #1d1d1d">Contact us</a>

</div>
<h2 style="text-align:center;font-weight: normal;">User Profile Card</h2>
<center>
<div class="card">
  <img src="images/i01.jpg" alt="urvish" style="width:100%">
  <h1>Urvish Joshi</h1>
  <p class="title">CEO & Founder, Photography Zone</p>
  <p>Urvi Photo Art</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card">
  <img src="images/kishan.jpg" alt="John" style="width:100%">
  <h1>Kishan Gadoya</h1>
  <p class="title">CEO & Founder, Photography Zone</p>
  <p>Urvi Photo Art</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card">
  <img src="images/kirit.jpg" alt="John" style="width:100%">
  <h1>Kirit Dhandha</h1>
  <p class="title">CEO & Founder, Photography Zone</p>
  <p>Urvi Photo Art</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
</div>
</center>
<br>
</body>
</html>
