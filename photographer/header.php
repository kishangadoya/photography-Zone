
<head>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body{margin: 0 auto;font-family: dominik;}

.topnav {
  overflow: hidden;
  background-color: #333;
  z-index: 2;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 15px;
  text-decoration: none;
  font-size: 19px;
  z-index: 2;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
}

.topnav a:hover {
  background-color: #ddd;
  color: #0e91d0;
}

.sticky {
  position: fixed;
  top: 0;
  z-index: 2;
  width: 100%;
}

.header{
    background: linear-gradient(to right,#133aff 25%,#00acff);  height:60px;
  height:60px;
  padding: 25px;
}

.a
{
  float: right;
  color: white;
  cursor: pointer;
  text-decoration:none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  z-index: 2;
  font-size: 16px!important;
}
.a:hover{ color: #0e91d0;}
c{cursor: default; float: right; color: white; }
span{  float: right;
  color: white;
  cursor: pointer;
  text-decoration:none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  z-index: 2;
  font-size: 16px!important;}
</style>
</head>
<body>
<?php include "dbconn.php";
$un = $_SESSION['client'];
$query = "SELECT * FROM reg_photographers where email='$un'";
$fire = $conn->query($query);
$reg = $fire->fetch();
?>
<div class="header">
    <a href="home.php" style="font-family: trajan pro;font-size: 49px;color: white;cursor: pointer;text-decoration:none;">Photography Zone</a>
    &nbsp;&nbsp;<a href="logout.php" class="a">Log out <i class="fa fa-sign-out" style="font-size: 18px"></i></a>&nbsp;
    &nbsp;&nbsp;<span class="a" style="font-size: 20px!important; margin-top: -5px;">Hi, <?php echo $reg['name']."  "; ?>|&nbsp;&nbsp;</span>
</div>

<!---****************************************** link ***********************************************-->
<div class="topnav" id="menubar">


</body>
<script>
	window.onscroll = function() {myFunction()};

	var topnav = document.getElementById("menubar");
	var sticky = topnav.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
	    topnav.classList.add("sticky");
	  } 
	  else {
	    topnav.classList.remove("sticky");
	  }
	}
</script>
