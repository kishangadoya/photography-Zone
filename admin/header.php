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
    background: linear-gradient(to right,#133aff 40%,#00acff );  height:60px;
  padding: 25px;
}

.a{
  float: right;
  color: white;
  cursor: pointer;
  text-decoration:none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  z-index: 2;
}
.a:hover{ color: #001bdc;} 
.topnav a.active{border-bottom-color: #0e91d0;}
c{cursor: default; float: right; color: white; }
</style>

<div class="header">
    <a href="home.php" style="font-family: trajan pro;font-size: 49px;color: white;cursor: pointer;text-decoration:none;">Photography Zone</a>
    <a href="logout.php" class="a">Log out <i class="fa fa-sign-out" style="font-size: 18px"></i></a>
</div>

<!---*********************************** link ****************************************-->
<div class="topnav" id="menubar">


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
