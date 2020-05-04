<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  </style>
</head>

<body>

<?php   include "header.php"; include 'dbconn.php'; ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php">User</a>
  <a href="package.php">Package</a>
  <a href="order.php" style="color: #2cbaff;background-color: #1d1d1d">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<div style="padding:25px">
	<table>
  <tr>
  	<th width="40">o_id</th>
    <th width="200">Party</th>
    <th>Package</th>
    <th>Venue</th>
    <th>Booked on</th>
    <th>Status</th>
  </tr>
  <?php 
        $query = "SELECT * FROM orders";
        $fire = $conn->query($query);

        while($reg = $fire->fetch()) 
        {
            ?>
            <tr>
              <td><?php echo $reg['o_id']; ?></td>
              <td><?php echo $reg['party']; ?></td>
              <td><?php echo $reg['package']; ?></td>
              <td><?php echo $reg['venue']; ?></td>
              <td><?php echo $reg['booked_on']; ?></td>
              <td><?php if($reg['status']=='Pending') echo '<center style="color:orange">Pending</center>'; else echo '<center style="color:#07d307;">Approved</center>'; ?></td>
            </tr>
            <?php
        }
    ?>
</table>

</div>
<div style="margin-top: 308px">
<?php   include "footer.php"; $fire = null; $conn = null; ?>             <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
