<?php

$un=$_POST['name'];

$pw=$_POST['pw'];

$conn=mysqli_connect("localhost","root","","pz");
$query="SELECT * FROM `reg_users` WHERE `username`='$un' AND `password`='$pw'";
$fire=mysqli_query($conn,$query);
$rec = mysqli_num_rows($fire);

if($rec>=1)
{ 
	session_start(); $_SESSION['user'] = $un; ?>
	<script> window.location = "index.php"; </script>
<?php }
else
{?>
	<script>
	window.location="login.php";
	alert("Invalid id password");	
	</script>
<?php
}
?>