<!DOCTYPE html>
<html>
<head>
	<title>LogIn for Photographer Panel</title>
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
	border-color: red;
	
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
	cursor: pointer;
}

.fieldsetborder
{
	margin-left: 0px;
	margin-top: 100px;
	height: 325px;
	width: 250px;
	padding-top: 10px;
	border-radius: 4px;
  
}

.submit{
	width: 150px;
	font-size: 16px;
	-webkit-transition-duration: 0.4s;
	transition-duration: 0.4s;
	font-size: 16px;
}
.submit:hover{ 
	background: linear-gradient(to right bottom,#4483f7,#00595d);
	width :204px;
}
.submit:active{
	background: linear-gradient(to right bottom,#525252,#000000);
}
.submit:focus{outline:none;}
.textbox:focus{
	background-color: #f3ff4d;
	border-color: blue;
	
}
a{
	text-decoration: none;
	color: white;font-size: 20px;
	padding-right: 50px;padding-top: 35px;
}
a:hover { color: #1ac121;}

	</style>
</head>
<body class="body" style="background:url(wallpaper.jpg); height: 654px;">
<div>
	<a href="form.php" style="float: right;"><font face="century gothic">Sign Up</font></a>

		<div class="header">
			<div class="headertxt" style="text-shadow: 0px 1px 100px 100px black;">
			 	<center>Photo/Videographer LogIn</center>
			</div>
		</div>
		
<!--*****************************************************************************************************-->
<!-- Contain-->
	<center>
	<form name="login" method="post" action="process.php">									

		<div class="fieldsetborder" style="box-shadow: 0px 5px 50px 5px black; ">
			<span style="float: bottom; font-family: century gothic; font-size:36px;color: white;">LogIn</span>
			<div style="padding-top: 50px; padding-left: 4px;">
		
				<input type="textbox" name="nm" style="font-size: 14px" placeholder="Enter email" class="textbox">	<br><br><br>

				<input type="password" name="pw" style="font-size: 14px" placeholder="Enter password" class="textbox"><br><br><br>

				<input type="submit" name="btn" value="Submit" class="submit" style="box-shadow: 0px 0px 2px white;">
			</div>

		</div>
	</form>
	</center>
	
</div>
</body>
</html>