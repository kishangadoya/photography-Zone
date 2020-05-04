<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <style>
  	table {
    font-family: dominik;
    font-size: 20px;
    border-collapse: collapse;
    width: auto;
	}
	table tr th{font-weight: normal;}
	td, th {
	    text-align: left;
	    padding: 8px;
	}
	th{background-color: #333333; color: white}
	a{text-decoration:none;color: #0e91d0 }  a:hover{color: #2eb900;}
	
  .submit{
  height: 41px;
  width: 150px;
  margin-left: 20px;
  background: linear-gradient(to right bottom,#ff3765,#730949);
  color: white;
  text-align: center;
  border:none;
  border-radius: 5px; 
}
    .submit{
      width: 150px;
      font-size: 16px;
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      font-size: 20px;
    }
    .submit:hover{ 
      background: linear-gradient(to right bottom,#4483f7,#00595d);
      box-shadow: 0px 0px 10px black!important; color: violet;
    }
    .submit:active{
    background: linear-gradient(to right bottom,#525252,#000000);
    }
    .submit:focus{outline:none;}
  .textbox{
  font-family: arial;
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
  width:283px;
  outline: none;
  border: 1px solid white!important;
}
  </style>
</head>

<body>

<?php   include "header.php";   ?>     <!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php" style="color: #2cbaff;background-color: #1d1d1d">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>
<div style="padding:25px;">
	<center>
    
  <span style="font-size: 36px">Send Feedback</span><br><br>
  <form method="POST">

    <table><tr>
    <td style="text-align: right"><span style="font-size: 22px">Subject:</span></td><td style="padding-left: 3px;"><input type="text" class="textbox" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;width: 257px;" name="fsubject" placeholder="Subject"/></td>
    </tr>
    <tr>
    <td style="text-align: right;">
    <span style="font-size: 22px">Description:</span><br><br><br><br></td><td><textarea style="font-size: 22px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="desc" placeholder="Description"></textarea><br><br></td>
    </tr></table>
    <input type="submit" class="submit" name="submit" value="Send" />
 
  </form>

  </center>
</div>
<div style="margin-top: 108px">
<?php   include "footer.php";  ?>       <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>

<?php 

    if(isset($_POST['submit']))
    {
        $sub = $_POST['fsubject'];
        $desc = $_POST['desc'];
        $from = $_SESSION['client'];
        $date = date("d-m-Y");
        $query = "INSERT INTO feedback(subject,description,from_user,fdbk_date) VALUES('$sub','$desc','$from',STR_TO_DATE('$date', '%d-%m-%Y'))";

        $fire = $conn->query($query);
    }

$conn = null; $fire = null; ?>