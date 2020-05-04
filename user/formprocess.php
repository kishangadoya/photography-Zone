<?php include 'dbconn.php';
	$fn = $_POST['fn'];
	$sn = $_POST['sn'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$pwd = $_POST['pwd'];
	$gender = $_POST['Gender'];
	$add = $_POST['add'];

	$q = "INSERT INTO reg_users(username,password,name,surname,contact) VALUES('$email','$pwd','$fn','$sn','$mno')";
	$f = mysqli_query($conn,$q);
	if($f)
		header("location:login.php");

?>