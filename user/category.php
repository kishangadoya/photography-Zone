<?php session_start(); include "dbconn.php";
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{ include 'header.php';} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Photography Zone</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      margin: 15px;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  
.navbar {
    margin-bottom: 0;
    background:linear-gradient(to bottom,#2d77ff,#00a1a9)!important;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
}
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #1e38f4 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }

  .box{
    width: 200px;
    height: 255px;
    margin:15px;
    margin-top: 70px;
    background-color: white!important;
    float: left;    
    border: 0.5px solid grey;
    border-radius: 3px;
    text-align:center;     
    font-size: 20px;
    padding-top: 10px;
    line-height: 1.5;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }
  .box:hover{box-shadow: 0px 0px 15px 2px lightgrey!important;}
  a{color: #0e91d0 }  a:hover{text-decoration:none!important;color: #2eb900!important;}
  

  .container-fluid {
      padding: 60px 50px;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  </style>
</head>
<body style="margin: 15px;">
<div style="background-color: lightgrey;">
<?php

$id = $_REQUEST['id']; 
if ($id==1) { $query = "SELECT * FROM `reg_photographers` WHERE `category`='$id' OR `category`=3"; }
if ($id==2) { $query = "SELECT * FROM `reg_photographers` WHERE `category`='$id' OR `category`=3"; }
  
$fire = $conn->query($query);
    while($category = $fire->fetch())
    {
    ?>
        <div class="box" style="padding-top: 27px;line-height: 0.95;cursor: pointer;" ><img src="../photographer/uploads/<?php echo $category['profile']; ?>" height="140px" width="140px" alt="Image not available"/><br><br><?php echo $category['name']; ?><br><a style="line-height: 2" href="viewdetail.php?id=<?php echo $category['id']; ?>">View</a></div>
        <?php 
    } $fire = null; $conn = null; ?>
  </div>
</body>
</html>