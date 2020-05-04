<?php

$un=$_POST['nm'];

$pw=$_POST['pw'];

$conn=mysqli_connect("localhost","root","","pz");
$query="SELECT * FROM `reg_photographers` WHERE `email`='$un' AND `password`='$pw'";
$fire=mysqli_query($conn,$query);
$rec = mysqli_num_rows($fire);

if($rec>=1)
{ 
	session_start(); $_SESSION['client'] = $un; ?>
	<script> window.location = "home.php"; </script>
<?php }
else
{?>
	<script>
	window.location="index.php";
	alert("Invalid id password");	
	</script>
<?php
}
?>