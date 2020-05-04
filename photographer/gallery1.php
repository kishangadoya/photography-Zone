<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Custom File Inputs | Codrops</title>
		<meta name="description" content="Demo for the tutorial: Styling and Customizing File Inputs the Smart Way" />
		<meta name="keywords" content="cutom file input, styling, label, cross-browser, accessible, input type file" />
		<meta name="author" content="Osvaldas Valutis for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- remove this if you use Modernizr -->
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		  <style>
h2{margin: 20px; font-size: 20px;}
    .checked{color: #314cd6;}
    .fa{font-size: 32px}
    float{float: right;margin-right: 50px;}
.blur{
	-webkit-filter:blur(5px);
}
.textbox{
	float: left!important;
	height: 21px!important;
	width:150px;
	font-size:20px;
	padding:5px;
	padding-left: 7px;
	margin:5px 0px 5px 5px;
	border: 1px solid white;
	border-radius:5px 0px 0px 5px;
	position: initial;
	opacity: 1;
	-webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ease-in-out;
}
.textbox:focus{
	width:300px;
	outline: none;
	border: 1px solid white!important;

}
</style>
	</head>
	<body>
		

<?php   include "header.php";   ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php" style="color: #2cbaff;background-color: #1d1d1d">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>
<div style="padding: 25px">

    
			<div >

				<center>
				<div class="box">
					<form method="post" action="#" enctype="multipart/form-data">
					<input type="file" name="file" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple style="display: none;" />
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span style="color: black;float: none;">Choose a file&hellip;</span></label>
					<br>
					<input type="submit" name="submit"/></form>

				</div></center>

			</div>
			<!-- Related demos -->
			
		<script src="js/custom-file-input.js"></script>

		<!-- // If you'd like to use jQuery, check out js/jquery.custom-file-input.js
		<script src="js/jquery-v1.min.js"></script>
		<script src="js/jquery.custom-file-input.js"></script>
		-->

	</body>
</html>
<?php
$client = $_SESSION['client'];
$query = "SELECT * FROM reg_photographers WHERE email='$client'";
        $fire = mysqli_query($conn,$query);

        $reg = mysqli_fetch_array($fire);
        if($reg['image1']=="")
        {
        	if($reg['image2']=="")
        	{
        		if($reg['image3']=="")
        		{
        			if($reg['image4']=="")
        			{
        				
        			}			
        		}
        		
        	}
         	
        }
        


if(isset($_POST['submit']))
{
	$img = $_FILES['file']['name'];

		
		move_uploaded_file($_FILES['file']['tmp_name'],"img/".$img);
}


?>