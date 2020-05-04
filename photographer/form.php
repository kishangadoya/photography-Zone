<html>
<head>
	<title>Sign Up for Photography Zone</title>
	<link rel="shortcut icon" type="image/png" href="favicon.png" />
	<style>
		.big
		{
			height: 40px;
			width: 200px;
			font-size: 20px;
			border-radius: 5px;
		}
		.img
		{
			margin-top: 10px;
			margin-left: 100px;
			border: 2px solid black;
		}

		b
		{
			color: red;
			font-family: verdana;
		}
		
		a:visited {
		    color: white;
		}
		a:hover {
  			  color: #029002!important;
  			  text-decoration: none;
		}
		a {text-decoration:none;}
		.body
		{
			left-margin: 12;
			height:1000px;
			width:1345px;
			font-family: verdana;
		}

		.header
		{
		  height:60px;
		  padding: 25px;
		}

		.nav
		{
			height: 800px;
			width: 600px;
			display: inline;
			float: left;
		}
		.middle
		{
			margin-top: 20px;
			margin-left:495px;
			height: 800px;
			width: auto;
			display: inline;			
		}
		.comman
		{
			display: table-cell;
		}
		.space
		{
			margin-left:20px;
		}
		.radiospace
		{
			margin-top: 18px;
			letter-spacing: 1px;
			font-family: verdana;
		}
		.btn
		{
			background-color: green;
			color:white;
			height: 40px;
			width: 150px;
			text-align: center;
			font-size: 20px;
			font-family: verdana;
		}
		.footer
		{
			height: 90px;
			background-color: grey;
			color: white;
			line-height: 1.5;
		}
		input,textarea{padding-left:8; border:0.5px solid lightgrey;}
		input:focus{border: 0.5px solid grey!important; outline: none; box-shadow: 0px 0px 1px grey;}
		textarea:focus{border: 0.5px solid grey!important; outline: none; box-shadow: 0px 0px 1px grey;}
	</style>
</head>

	<body style="background-color: #e9ebee!important;">
		<?php include "header01.php"; ?>

<div>
	
<!--*******************************************************************************************-->
	<div>

	 	<nav class="nav comma">
	 		<br>
	 		<br>

	 		<span style="color:black; margin-left: 42px; font-size: 18px;  font-family:verdana;">
				&nbsp;&nbsp;&nbsp;	Dear
				visitor 	
				Welcome to our site... Here you can<br>
			 <span style="margin-left: 32px">register your account to book photographers and</span>
	 		<br> <span style="margin-left: 32px">videographers for your ocassion or events.</span>
		</span><br><br>
	 		

	<img src="images\1.jpg" height="300px" width="400px" class="img">

 	<img src="images\2.jpg" height="300px" width="400px" class="img">
		</nav>
	 </div>

	 
<!--		***************			FORM START  ********8****          -->
 <div class="middle comman">
				<form name="fm" method="post" action="signup.php">

 		<br><br>

	 		<span style="font-size: 30px;font-weight:normal;">Create a new account </span>
	 		<br><br>
	 		<input type="textbox" name="fn" placeholder="First name" class="big">

	 		<b id="fnmsg" ></b>

	 		<input type="textbox" name="sn" placeholder="Second name" class="big space" style="margin-left: 10px";>
	 		<b id="snmsg"></b><br><br>
<!-- *************************************************-->

 		   <input type="email" name="email" placeholder="Email" class="big">
            <b id="emailmsg"></b>
 		   <br> <br>

 		   <input type="textbox" name="mno" placeholder="Contact no." class="big">
            <b id="mval"></b>
 		   <br> <br>




 		   <input type="password" name="pwd" placeholder="Your password" class="big"> 
 		    <b id="pmsg"></b>
 		    <br> 	 <br>

 		    <!-- <input type="password" name="repwd" placeholder="Re-enter password" class="big">
 		    <b id="repasswordmessage"></b>

 		    <br>
 		    <br>-->


 		   <span style="font-size: 20px;font-family:verdana;">Select Birthday</span>
 		   <br>

 		   <input type="date" name="bday" class="big" style="margin-top: 6px;">
 		   <b id="dateval"></b>

 		   
	 	<div class=radiospace>
	 		<span style="font-size: 20px;font-family:verdana;margin-top: 100px!important;">Select your category:</span><input type="radio" name="category" value="1" style="cursor: pointer; ">Photographer</input>
	 		<input type="radio" name="category" value="2" style="cursor: pointer;">Videographer</input>
	 		<input type="radio" name="category" value="3" style="cursor: pointer;">Both</input>
	 		&nbsp; &nbsp; &nbsp; &nbsp;
	 		<b id="ctgrmsg"></b>
	 	</div>


	 	<div class=radiospace>
	 	<span style="font-size: 20px;font-family:verdana;">Gender:</span>
		<input type="radio" name="Gender" value="Male" style="cursor: pointer;">Male
	 		<input type="radio" name="Gender" value="Female" style="cursor: pointer;">Female

	 		&nbsp; &nbsp; &nbsp; &nbsp;
	 		<b id="gendermsg"></b> <br><br>
	 		<input type="textbox" name="studio" placeholder="Studio name" class="big">

	 		<b id="fnmsg" ></b>
	 		
	 	</div>

	 		<br>
	 		<span style="font-size: 20px; font-family:verdana;margin-top: 5px;">Address:</span><br>
	 		<textarea name="add" style="height: 150; width: 500px;border-radius: 5px;"></textarea>
	 
	 		<b id="addval"></b> 
	 		<br><br>

	 
	 


	 	<input type="submit" onclick="return check()" name="register" class="btn" value="Register" style="cursor:pointer; background-color:#29ce14; border:none; border-radius:3px;">

	 	<input type="reset" value="Reset" name="Reset"  class="btn" style="margin-left: 13px; background-color:black; border:none; border-radius:3px;"><br><br> 
</div>	 		

	 <footer class="footer">
	 <div>
	 	<center><br>By using PHOTOGRAPHY ZONE you agree to read and accepted our <a href="" >terms of use</a>, <a href="">cookie and privacy policy</a>. 
	 		<br><a href="" >Copyright 2017-2018</a>. All rights reserved.</center>

	 </div>
	 	</footer>
	 
</form>
 
</body>
</html>

<?php
	include "dbconn.php";
	if(isset($_POST['register']))
	$query = "INSERT INTO reg_photographers(name,category,studio,exp,reg_date,rating) VALUES()"	
?>

<script type="text/javascript">
function check()
{
	var nm,snm,eml,mobn,pswd,rpwd,birth,cate,gn,adrs;
	nm=document.fm.fn.value;//firstbox//

	snm=document.fm.sn.value;//second name box//

	eml=document.fm.email.value;//email box//

	mobn=document.fm.mno.value;//Mobile

	pswd=document.fm.pwd.value;//password//

	rpwd=document.fm.repwd.value;//Re enter password//

	birth=document.fm.bday.value;//birthdate

	cate=document.fm.category.value;//category validation//

	gn=document.fm.Gender.value;//gender validtion//

	adrs=document.fm.add.value;

	var	status=true;

//first name

	if(nm=="")
	{
		document.getElementById("fnmsg").innerHTML="Enter First-Name";
		status=false;
	}
	else
	{
		document.getElementById("fnmsg").innerHTML="";
		
	}
//SECOND NAME

	if(snm=="")
	{
		document.getElementById("snmsg").innerHTML="Enter Second-Name";
		status=false;
	}
	else
	{
		document.getElementById("snmsg").innerHTML="";
		
	}
//email
	if(eml=="")
	{
		document.getElementById("emailmsg").innerHTML="Enter email";
		status=false;
	}
	else
	{
		document.getElementById("emailmsg").innerHTML="";
		
	}

//Mobile no.
	if(mobn=="")
	{
		document.getElementById("mval").innerHTML="Enter Mobile no.";
		status=false;
	}

	else if(mobn.length!=10)
	{
		document.getElementById("mval").innerHTML="Enter 10 digits";
		status=false;
	}

	else if(isNaN(mobn))
	{
		document.getElementById("mval").innerHTML="Enter only Numbers";
		status=false;
	}


	else
	{
		document.getElementById("mval").innerHTML="";
		
	}

//password
	if(pswd=="")
	{
		document.getElementById("pmsg").innerHTML="Enter New-Password";
		status=false;
	}

	else if((pswd.length<8) || (pswd.length>16))
	{
		document.getElementById("pmsg").innerHTML="Enter password between 8-16";
		status=false;
	}	

	else
	{
		document.getElementById("pmsg").innerHTML="";
		
	}
//repassword

	if(rpwd=="")
	{
		document.getElementById("repasswordmessage").innerHTML="Enter Field";
		status=false;
	}

	else if (pswd!=rpwd) 
	{
		document.getElementById("repasswordmessage").innerHTML="Password does not match";
		status=false;
	}

	else
	{
		document.getElementById("repasswordmessage").innerHTML="";
		
	}

//birthdate
	if(birth=="")
	{
		document.getElementById("dateval").innerHTML="Select birthdate...";
		status=false;
	}
	else
	{
		document.getElementById("dateval").innerHTML="";
		
	}


//category
	if(cate=="")
	{
		document.getElementById("ctgrmsg").innerHTML="Select Atleast one";
		status=false;
	}
	else
	{
		document.getElementById("ctgrmsg").innerHTML="";
	}

//Gender

	if(gn=="")
	{
		document.getElementById("gendermsg").innerHTML="Select Atleast one";
		status=false;
	}
	else
	{
		document.getElementById("gendermsg").innerHTML="";
	}

//Address 
if(adrs=="")
	{
		document.getElementById("addval").innerHTML="Enter address";
		status=false;
	}
	else
	{
		document.getElementById("addval").innerHTML="";
	}

	




	if(status==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

</script>
	
