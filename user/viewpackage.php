<?php session_start(); include 'dbconn.php';
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{ include 'header.php';} ?>

<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
body {
    font-family: Arial;
    margin-top: 76px!important;
    margin: 25px;
}

.coupon {
    border: 1px solid #bbb;
    width: 300px;
    height: auto;
    border-radius: 5px;
    margin-right: 20px;
    float: left;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
.coupon:hover{box-shadow: 0px 0px 15px 7px lightgrey;}

.conteiner {
    padding: 2px 16px;
    width: 298px;
}

.promo {
    background: orange;
    color: white;
    padding: 5px;
    font-size: 16px;
}

.expire {
	line-height: 1.5;
    color: red;
}
.btn
    {
      background-color: green;
      color:white;
      height: 40px;
      text-align: center;
      margin-bottom: 12px;
      font-size: 20px;
      font-family: verdana;
      cursor:pointer; 
      background-color:#29ce14; 
      border:none; 
      border-radius:3px;
      width: 92%;
    }
input{-webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;font-size: 18px!important;}
  input:hover{background-color: white!important;color: #29ce14!important;border: 1px solid #29ce14!important;}
  input:focus{outline: none!important;}
  hr{margin-top: 0px;
  	margin-bottom: 10px;
  	width: 100%;}

</style>
<?php   $id = $_GET['id'];
		$query = "SELECT * FROM package WHERE id='$id'";
        $fire = $conn->query($query); 
        if($fire->rowCount($fire))
        {
while($reg = $fire->fetch())

{ ?>
<div class="coupon">
  <div class="conteiner"">
  </div>
  <CENTER><img src="images\package.png" alt="image not found" style="height:25%;margin-top: 10px;"></CENTER>
  <div class="conteiner" style="background-color:white;">
    <h3><b><center><?php echo $reg['package_name']; ?></center></b></h3> 
  </div>
  <hr>
  <div class="conteiner">
  	<p><?php echo $reg['description']; ?>.</p><hr>
  	<center style="font-size: 16px;"><?php echo $reg['quality']; ?> Quality</center><hr style="margin-top: 8px;">
  	<center style="font-size: 16px;"><span class="promo"><?php echo $reg['clicks']; ?></span> Clicks</center><hr style="margin-top: 7px;">
  	<center style="font-size: 16px;"><?php echo $reg['hours']; ?> Hours</center><hr style="margin-top: 8px;">
  	<center style="font-size: 16px;">Drone <?php echo $reg['drone']; ?></center><hr style="margin-top: 8px;">
  	<center style="font-size: 20px;"><i class="fa fa-inr"></i> <?php echo $reg['price']; ?></center>
  </div><hr style="margin-top: 7px;margin-bottom: 13px;">
  <center><a href="bookorder.php?pid=<?php echo $reg['pid']; ?>&pnm=<?php echo $reg['package_name']; ?>&id=<?php echo $id; ?>"><input type="button" class="btn" value="Book" style="" title="Book this package"></a></center>
</div>
<?php }
}
else 
echo '<center><br><br>No packages uploaded yet</center>'; $fire = null; $conn = null;?>

</head>
</html>