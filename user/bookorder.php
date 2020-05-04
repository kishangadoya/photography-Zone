<?php session_start(); 
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{?> <script> window.location="login.php"; alert("Login first");</script> <?php } 
  include "dbconn.php";
  $id = $_REQUEST['id'];
        $query = "SELECT * FROM package WHERE id='$id'";
        $fire = $conn->query($query); $reg = $fire->fetch();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>

<style>

	table {
    font-size: 20px;
    border-collapse: collapse;
    width: auto;
	}
	table tr th{font-weight: normal;}
	td, th {
	    text-align: left;
	    padding: 8px;
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
      input{-webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;font-size: 18px!important;}
  input:hover{background-color: white!important;color: #29ce14!important;border: 1px solid #29ce14!important;}
    input:focus{outline: none!important;}
</style>
<div style="margin:25px;margin-top: 80px;">
	<center>
    
  <span style="font-size: 36px">Book Order</span><br><br>
  <form method="POST" action="">

    <table><tr>
    <td style="text-align: right"><span style="font-size: 22px">Date:</span></td><td ><input type="text" class="textbox" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;width: 249px;" name="date" value=""/></td>
    </tr>
    <tr>
    <td style="text-align: right;">
    <span style="font-size: 22px">Venue:</span><br><br></td><td><textarea style="font-size: 22px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="venue"></textarea></td>
    </tr>
    <tr>
    <td style="text-align: right;">
    <span style="font-size: 22px">Description:</span><br><br><br><br></td><td><textarea style="font-size: 22px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="desc"></textarea><br><br></td>
    </tr>
</table>
    <a href="orders.php"><input type="submit" name="submit" class="btn" value="Book Now" style="cursor:pointer; background-color:#29ce14; border:none; border-radius:3px;width: 160px;"></a>
 
  </form>

  </center>
</div>

</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
    	$pid = $_GET['pid'];
    	$pnm = $_GET['pnm'];
    	$date = $_POST['date'];
    	$venue = $_POST['venue'];
    	$desc = $_POST['desc'];
    	$user = $_SESSION['user'];
    	$datenow = date("d/m/Y");
      $q="SELECT email from reg_photographers WHERE id='$id'";
      $client = $conn->query($q);
      $rec = $client->fetch();
      $r=$rec['email'];

      $query = "INSERT INTO orders VALUES('','$r','$user','$pid','$pnm','$venue','$datenow','$date','$desc','Pending')";
        $fire = $conn->query($query);
        if($fire)
        {
          ?><script type="text/javascript">window.location="orders.php";</script><?php
        }
    }
$fire=$client=$conn=null; ?>