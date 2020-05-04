<?php

$un=$_POST['name'];

$pw=$_POST['pw'];

include 'dbconn.php';

$query="SELECT * FROM `admin_login` WHERE `username`= '$un' AND `password`= '$pw' ";
$fire = $conn->prepare($query);
$fire->execute(); 
$rec = $fire->rowCount($fire);

if($rec>=1)
{ 
	session_start(); $_SESSION['admin'] = $un; ?>
	<script> window.location = "home.php"; </script>
<?php }
else
{?>
	<script>
	window.location="index.php";
	alert("Invalid id password");	
	</script>
<?php
}	$fire->close();
	$conn->close();
?>