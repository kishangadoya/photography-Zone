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
    width: 100%;
	}
	table tr th{font-weight: normal;}
	td, th {
	    border: 1px solid #dddddd;
	    text-align: center;
	    padding: 8px;
	}
	th{background-color: #333333; color: white}
	a{text-decoration:none;color: orange; }  a:hover{color: #0e91d0;}
	tr:nth-child(even) {
	    background-color: #dddddd;
	    border-left-color: white!important;
	}
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
  width:300px;
  outline: none;
  border: 1px solid white!important;
}
  .fa-trash{cursor: pointer;font-size: 30px!important;color: #0e91d0;} .fa-trash:hover{color:red;}
  .fa-check{cursor: pointer;font-size: 30px!important;color: #0e91d0;} .fa-check:hover{color:#00e000;}

  </style>
</head>

<body>

<?php   include "header.php";   ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php" style="color: #2cbaff;background-color: #1d1d1d">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important;">Contact us</a>

</div>
<div style="padding:25px">
	<table>
  <tr>
  	<th width="120">Order ID</th>
    <th>Party</th>
    <th>Order for</th>
    <th>Package</th>
    <th>Booked on</th>
    <th width="150">Status</th>
    <th width="100">Approval</th>
  </tr>
  <?php 
        $client = $_SESSION['client'];
        $query = "SELECT * FROM orders WHERE party='$client'";//for perticular photographer
        $fire = $conn->query($query);
        if($fire->rowCount($fire))
        {
          while($package = $fire->fetch()) 
          {
            ?>
            <tr>
              <td><?php echo $package['o_id']; ?></td>
              <td><?php echo $package['client']; ?></a></td>
              <td><?php echo $package['party']; ?></td>
              <td><?php echo $package['package']; ?></td>
              <td><?php echo $package['booked_on']; ?></td>
              <td><?php if($package['status']=='Pending') echo '<center style="color:orange">Pending</center>'; else echo '<center style="color:#07d307;">Approved</center>'; ?></td>
              <td><a href="<?php $_SERVER['PHP_SELF'] ?>?chk=<?php echo $package['o_id']; ?>" class="fa fa-check"></a> &nbsp;&nbsp;&nbsp;<a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $package['o_id']; ?>" class="fa fa-trash"></a></td>
            </tr>
            <?php
          }
        }
        else 
        echo '</table><center><br><br>No order placed yet<br><br></center>';?>
</table>
</div>
<div style="margin-top: 148px">
<?php   include "footer.php";  ?>             <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>

<?php
  
  if(isset($_GET['chk']))
  {
    $oid = $_GET['chk']; 
    $conn->query("UPDATE orders SET status='Approve' Where o_id='$oid'");
    ?><script type="text/javascript">window.location="order.php";</script><?php
  }
  if(isset($_GET['del']))
  {
    $oid = $_GET['del']; 
    $conn->query("DELETE FROM orders Where o_id='$oid'");
    ?><script type="text/javascript">window.location="order.php";</script><?php  
  }
?>
