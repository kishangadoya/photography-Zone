<?php 	include 'dbconn.php'; session_start();

	$img = $_GET['img'];
	$client = $_SESSION['client'];
	$id = $_GET['id'];
	if($id==1)
	{
		$q = "UPDATE reg_photographers SET image1='' WHERE email='$client'";
	}
	else if($id==2)
	{
		$q = "UPDATE reg_photographers SET image2='' WHERE email='$client'";
	}
	else if($id==3)
	{
		$q = "UPDATE reg_photographers SET image3='' WHERE email='$client'";
	}
	else
	{  
		$q = "UPDATE reg_photographers SET image4='' WHERE email='$client'";
	}

	$f = $conn->query($q);
	unlink("uploads/".$img);
	header("location:gallery.php")
?>