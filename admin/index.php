<!DOCTYPE html>
<html>
<head>
	<title>LogIn for Admin Panel</title>
		 <link rel="shortcut icon" type="image/png" href="favicon.png" />

	<!--BOOTSTRAP EFFECT-->

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
.body
{
	margin: 0 auto;
}

.header
{
	
	height: 100px;
	width: auto;
	margin: 0 auto;
}

.headertxt
{
	font-family: century gothic;
	padding-left: 500px;
	padding-top: 120px;
	font-size: 35px;
	color: #bbbbbb;
}


.textbox
{
	height: 30px;
	width: 200px;
	font-size: 16px;
	border-radius:20px;
	padding-left: 12px;
	border: 1px solid;
	border-color: grey;
	
}

.submit
{
	height: 40px;
	width: 150px;
	background: linear-gradient(to right bottom,#ff3765,#730949);
	color: white;
	text-align: center;
	border:none;
	border-radius: 20px;
	margin-left: 35px;
	cursor: pointer;

	
}

.fieldsetborder
{
	margin-top: 100px;
	margin-left: 550px;

	height: 325px;
	width: 250px;

	padding-left: 30px;
	padding-top: 10px;
	border-radius: 4px;
  
}

		.submit{
			width: 150px;
			margin-left: 33px;
			font-size: 16px;
			-webkit-transition-duration: 0.4s;
			transition-duration: 0.4s;
			font-size: 16px;
		}
		.submit:hover{ 
			background: linear-gradient(to right bottom,#4483f7,#00595d)!important;
			box-shadow: 0px 0px 2px yellow!important;
			width :204px;
			margin-left: 6px;
  		 }
  		 .submit:active{
  		 	background: linear-gradient(to right bottom,#525252,#000000)!important;
  		 }
  		 .submit:focus{outline:none;}
  		 .textbox:focus{
  		 	background-color: #f3ff4d;
  		 	border-color: blue;
  		 	outline: none;
  		 }
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    font-family: arial;
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    top:;
    padding: 0;
    border: 1px solid #888;
    border-radius: 5px;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 10px;
    background-color: #5cb85c;
    color: white;
    font-family: century gothic;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
.span{font-family: arial;color: white;cursor: pointer;} .span:hover{color: yellow}
</style>

</head>
<body class="body" style="background:url(wallpaper.jpg); height: 654px;">
<div >

		<div class="header">
			<div class="headertxt" style="text-shadow: 0px 1px 100px 100px black;">
			 	Log in as Administrator
			</div>
		</div>
		
<!--*****************************************************************************************************-->
<!-- Contain-->

	<form name="login" method="post" action="process.php">									

		<div class="fieldsetborder" style="box-shadow: 0px 5px 50px 5px black; ">
			<span style="margin-left: 88px; float: bottom; font-family: century gothic; font-size:36px;color: white;">Pz</span>
			<div style="padding-top: 50px; padding-left: 4px;">
		
				<input type="textbox" name="name" style="font-size: 14px" placeholder="Enter name" class="textbox">	<br><br><br>

				<input type="password" name="pw" style="font-size: 14px" placeholder="Enter password" class="textbox"><br><br>

				<center><span class="span" onclick="display()">Change password</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center><br>
				
				<input type="Submit" name="btn" value="Submit" class="submit" style="box-shadow: 0px 0px 2px white;"><br><br>

			</div>

		</div>
	</form>
</div>

<center><div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="font-weight: normal;">Change Password</h2>
    </div>
    <div class="modal-body" style="height: 60%;padding-top: 20px;">
      <center><form method="POST">
      	<input type="password" name="oldpwd" style="border-radius: 3px;border: 1px solid grey;height: 20px;padding: 5px;padding-left:6px;font-size: 16px;" placeholder="Enter old password" /><br><br>
      	<input type="password" name="newpwd" style="border-radius: 3px;border: 1px solid grey;height: 20px;padding: 5px;padding-left:6px;font-size: 16px;" placeholder="Enter new password" /><br><br>
      	<input type="submit" name="submit" value="Change" class="submit" style="margin-left: 0px;border-radius: 5px;background: linear-gradient(to right bottom,#76f876,#40a640);" /><br><br>
      </form></center>
    </div>  
  </div>
</div></center>

</body>
</html>

<?php  
	if(isset($_POST['submit']))
	{
		$conn = mysqli_connect("localhost","root","","pz") or die("Could not connect to db");
		$oldpwd = $_POST['oldpwd'];
		$newpwd = $_POST['newpwd'];

		$query="SELECT * FROM `admin_login` WHERE `password`='$oldpwd'";
		$fire=mysqli_query($conn,$query);
		$rec = mysqli_num_rows($fire);
		if($rec>=1)
		{
			$query = "UPDATE `admin_login` SET `password`= '$newpwd'";
			$fire=mysqli_query($conn,$query);

		}
		else
		{
		?>
			<script>window.location="index.php"; alert("Wrong password! Password change attempt failed");</script>
		<?php
		}
	}

?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function display()	 {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
