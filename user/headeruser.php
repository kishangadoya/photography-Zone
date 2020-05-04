  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    margin-left: 10px;
    background-color: #f9f9f9;
    width: 185px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 5px;
}

.dropdown-content a {
    color: black;
    padding: 12px 15px;
    text-decoration: none;
    display: block;
    border-radius: 5px;

}

.dropdown-content a:hover {background-color: #f3f1f1!important;text-decoration: none;color: #2d77ff!important;}
.dropdown:hover .dropdown-content {
    display: block;
    background-color: white;

}
.dropbtn {
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropbtn:hover{z-index: 1; background-color: white!important;}
.navbar {
    margin-bottom: 0;
    background:linear-gradient(to bottom,#2d77ff,#00a1a9)!important;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
}
.navbar li a, .navbar .navbar-brand {
    color: #fff !important;  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
}
.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #1e38f4 !important;
    background-color: #fff !important;
}
.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top" style="border-width: 0 0 0px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Photography Zone</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="photographers.php">PHOTOGRAPHERS</a></li>
        <li><a href="orders.php">MY ORDERS</a></li>
        <li><a href="about.php">ABOUT</a></li>

        <div class="dropdown" style="padding-top: 15px">
        <li><a class="dropbtn" style="padding-bottom: 15px">SETTINGS <i style="font-size: 18px" class="fa fa-caret-down"></i></a></li>
          <div class="dropdown-content">
            <a href="#">Change Password &nbsp;<i class="fa fa-key" style="font-size: 18;color: #2d77ff;"></i></a>
            <a href="profile.php">Edit profile <i class="fa fa-user-circle-o" style="font-size: 18;color: #2d77ff"></i></a>
            <a href="logout.php">Log Out <i class="fa fa-sign-out" style="font-size: 18px;color: #2d77ff"></i></a>
          </div>
        </div>      
      </ul>
    </div>
  </div>
</nav>
