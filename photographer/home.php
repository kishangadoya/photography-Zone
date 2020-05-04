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
      width: 160px;
      height: 205px;
      margin:12px;
      float: left;    
      border:1.2px solid black;
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

<?php   include "header.php"; include 'dbconn.php'; 
$client=$_SESSION['client']; ?>

  <a href="home.php" style="margin-left: 15px;color: #2cbaff;background-color: #1d1d1d">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>
<div style="padding:20px;height:230px;">
  <div class="box" style="padding-top: 20px" ><img src="images\event.png" height="120px" width="120px"/>Events Booked:<br>0</div>

  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\package.jpg" height="120px" width="120px"/>Packages Choosed: <font color="#04a710"><?php  $query = "SELECT * FROM orders WHERE client='$client';"; 
           $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font></div>
  
  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\orders.jpg" height="120px" width="120px"/>Orders Placed:<br><font color="#04a710"><?php $query = "SELECT * FROM orders WHERE status='Approve' AND client='$client';";
           $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font></div>
</div>
<div style="margin-top: 149px">
<?php    include "footer.php"; $fire = null; $conn = null; ?>          <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>