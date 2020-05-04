<?php include "dbconn.php";
	$fn = $_POST['fn'];
	$sn = $_POST['sn'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$pwd = $_POST['pwd'];
	$bday = $_POST['bday'];
	$cat = $_POST['category'];
	$gndr = $_POST['Gender'];
	$studio = $_POST['studio'];
	$add = $_POST['add'];
	$date = date("d-m-Y");
	$query = "INSERT INTO reg_photographers(email,password,contact,name,surname,bday,gender,category,studio,address,reg_date) VALUES('$email','$pwd','$mno','$fn','$sn','$bday','$gndr','$cat','$studio','$add',STR_TO_DATE('$date', '%d-%m-%Y'))";

	$fire = $conn->query($query);
	session_start(); $_SESSION['client'] = $email;
	header("location:home.php");?>