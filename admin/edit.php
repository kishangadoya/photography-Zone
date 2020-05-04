<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>


<?php include "header.php"; include "dbconn.php"; $c_id = $_GET['rec']; $nm = $_GET['nm'];
	$query = "SELECT `category` FROM `category` WHERE `c_id`='$c_id'";
	$fire = $conn->query($query);
?>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<style>
	img{height: 20%;}
	.submit{
		height: 40px;
		width: 150px;
		background: linear-gradient(to right bottom,#ff3765,#730949);
		color: white;
		text-align: center;
		border:none;
		border-radius: 5px;	
	}
		.submit{
			width: 150px;
			font-size: 16px;
			-webkit-transition-duration: 0.3s;
			transition-duration: 0.3s;
			font-size: 20px;
			cursor: pointer;
		}
		.submit:hover{ 
			background: linear-gradient(to right bottom,#4483f7,#00595d);
			box-shadow: 0px 0px 10px black!important; color: violet;
  		}
  		.submit:active{
  		 	background: linear-gradient(to right bottom,#525252,#000000);
  		}
  		.submit:focus{outline:none;}
  		span{font-size: 32px;}
  		.imgcss{box-shadow: 1px 1px 10px 1px black;}
  		.textbox:focus{
  		 	background-color: #f7ff89;
  		 	border-color: blue!important;
  		 	outline: none;
  		 	color: purple;
  		}
</style>
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php" style="color: #2cbaff;background-color: #1d1d1d">Category</a>
  <a href="user.php">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<div style="padding: 25px">

	<center>
		<span><span style="float: left;font-size: 20px;"><a href="category2.php" style="text-decoration: none; ">Category</a> >> Edit image</span><span style="margin-right: 227px;">Edit your image</span><br><br>
		<img class="imgcss" alt="image was deleted!" src="uploads\<?php echo $nm; ?>" title="<?php echo $nm; ?>" /><br><br>

	<form action="#" method="POST" enctype="multipart/form-data" id="form2">

		<span style="font-size: 22px">Name: </span><input type="text" class="textbox" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="edtxt" value="<?php $row = $fire->fetch();  echo $row['category'];?>"/>
		<br><br>

		<input style="font-size: 22px;border: 1px solid grey; padding: 5px; border-radius:5px;" type="file" name="newimg"/><br><br>
			
			<input type="submit" class="submit" name="update" value="Update" />
 
	</form>

	</center>
</div>
</html>

<?php

	if(isset($_POST['update']))   //click on UPDATE
	{
		if($newimg = $_FILES['newimg']['name']=="")		//no file is uploaded
		{   
			$newimg = $nm;   
		}

		else 	//upload new file
		{   
			unlink("uploads/".$nm);                 //delete old image
			$newimg = $_FILES['newimg']['name'];
			move_uploaded_file($_FILES['newimg']['tmp_name'],"uploads/".$newimg); 
		}
		

		$newtxt = $_POST['edtxt'];
		$q = "UPDATE `category` SET `c_id`='$c_id',`category`='$newtxt',`image`='$newimg' WHERE `c_id`='$c_id'";
		
		$f = $conn->query($q) or die("Cant update data from database".mysql_error($conn));
		?>
			<script> 
				window.location="category2.php";
			</script>
		<?php
	}	
$fire=$f=$conn=null; ?>