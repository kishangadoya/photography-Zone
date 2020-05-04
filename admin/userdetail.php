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
  	table {
	    font-family: dominik;
	    font-size: 20px;
	    border-collapse: collapse;
	    width: 100%;
	}
	table tr th{font-weight: normal;}
	td, th {
	    border: 1px solid #dddddd;
	    text-align: center;
	    padding: 8px;
	}
	th{background-color: #333333; color: white}
	a{text-decoration:none;}
	tr:nth-child(even) {
	    background-color: #dddddd;
	    border-left-color: white!important;

	}
    .checked{color: #314cd6;}

  </style>
</head>

<?php   include "header.php"; include 'dbconn.php'; ?>     <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php" style="color: #2cbaff;background-color: #1d1d1d">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<?php 
        $query = "SELECT * FROM reg_users";
        $fire = $conn->query($query); $reg = $fire->fetch(); ?>

<div style="padding:20px">
<form style="font-size: 28px">
	<center>
	<table>
	<tr>
		<td>User ID: </td><td><?php echo $reg['u_id']; ?></td>
	</tr>
	<tr>
		<td>Name: </td><td><?php echo $reg['name']; ?></td>
	</tr>
	<tr>
		<td>Contact: </td><td><?php echo $reg['contact']; ?></td>
	</tr>
	<tr>
		<td>Registered date: </td><td><?php echo $reg['reg_date']; ?></td>
	</tr>

	</table>
	</center>
	</form>
</div>
<?php $fire = null; $conn = null; ?>