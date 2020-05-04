<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>

<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .box{
      width: 160px;
      height: 205px;
      margin:12px;
      float: left;    
      border:1.3px solid black;
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
  
  </style>
</head>

<body>

<?php include "header.php"; include "dbconn.php"; ?>        <!-- - - - - - Header - - - - - -->
  <a href="home.php" style="margin-left: 15px;color: #2cbaff;background-color: #1d1d1d">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<div style="padding:20px;height:230px;">
  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\photographer.jpg" height="120px" width="120px"/>Photographers<br>
    <font color="#04a710"><?php  $query = "SELECT * FROM reg_photographers;"; 
          $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font>
  </div>

  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\user.jpg" height="120px" width="120px"/><br>Users<br>
  <font color="#04a710"><?php  $query = "SELECT * FROM reg_users;"; 
           $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font>
  </div>

  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\packages.jpg" height="120px" width="120px"/>Packages<br>
    <font color="#04a710"><?php  
    $query = "SELECT * FROM package;"; 
           $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font></div>
  
  <div class="box" style="padding-top: 20px;line-height: 1.6;"><img src="images\orders.jpg" height="120px" width="120px"/>Orders<br><font color="#04a710"><?php  $query = "SELECT * FROM orders WHERE status='Approve'"; 
           $fire = $conn->query($query); echo $fire->rowCount($fire);  ?></font></div>
</div>
<div style="margin-top: 149px">
<?php    include "footer.php";  $fire = null; $conn = null; ?>        <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>