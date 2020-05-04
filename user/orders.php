<?php session_start(); 
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
      background: linear-gradient(to bottom,#2d77ff,#00a1a9);
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
    float: left;    
    border: 1px solid black;
    border-radius: 3px;
    text-align:center;     
    box-shadow: 1px 2px 12px black;
    font-size: 20px;
    padding-top: 10px;
    line-height: 1.5;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }
  .box:hover{box-shadow: 1px 1px 18px #002bff;}
  a{color: #0e91d0 }  a:hover{text-decoration:none;color: red;}
  

  .container-fluid {
      padding: 60px 50px;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
table {
    font-size: 20px;
    border-collapse: collapse;
    width: 100%;
    color: black;
  }
  table tr th{font-weight: normal;}
  td, th {
      border: 1px solid #e8e8e8;
      text-align: center!important;
      padding: 8px!important;
  }
  th{background-color: #333333; color: white}
  tr:nth-child(even) {
      background-color: #e8e8e8;
      border-left-color: white!important;

  }
  </style>
</head>
<?php include "dbconn.php";
$user = $_SESSION['user'];?>

<div style="padding:25px;padding-top: 50px!important;">
  <center style="font-size: 24px;color: black;margin-bottom: 15px;"><u>Your Orders</u></center>
  <table>
    <tr>
    <th>Order ID</th>
    <th>Client</th>
    <th>Package</th>
    <th>Venue</th>
    <th>Booked on</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php $query = "SELECT * FROM orders where party='$user'";
        $fire = $conn->query($query); 

  while($reg = $fire->fetch())

{ ?>
  <tr>
    <td><?php echo $reg['o_id']; ?></td>
    <td><?php echo $reg['client']; ?></td>
    <td><?php echo $reg['package']; ?></td>
    <td><?php echo $reg['venue']; ?></td>
    <td><?php echo $reg['booked_on']; ?></td>
    <td><?php echo $reg['description']; ?></td>
    <td><?php if($reg['status']=='Pending') echo '<center style="color:orange">Pending</center>'; else echo '<center style="color:#07d307;">Approved</center>'; ?></td>
    <td><a href="orders.php?del=<?php echo $reg['o_id']; ?>">Cancel</a></td>
  </tr>
<?php }?>

</table>
</div>
</html>
<?php
if(isset($_GET['del']))
  {
    $oid = $_GET['del']; 
    $conn->query("DELETE FROM orders Where o_id='$oid'");
    ?><script type="text/javascript">window.location="orders.php";</script><?php  
  }
$fire=$conn=null; ?>