<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>

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
	a{text-decoration:none;color: #0e91d0 }  a:hover{color: #2eb900;}
	tr:nth-child(even) {
	    background-color: #dddddd;
	    border-left-color: white!important;

	}
  .fa-eye{color: #d202d2; font-size:30px; cursor: pointer;} .fa-eye:hover{color: #0e91d0;}

  </style>
</head>

<body>

<?php   include "header.php"; include 'dbconn.php';  ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php" style="color: #2cbaff;background-color: #1d1d1d">Feedback</a>

</div>
<div style="padding:25px">
	<table>
  <tr>
  	<th width="45">f_id</th>
    <th>Subject</th>
    <th width="400">Description</th>
    <th>From</th>
    <th width="140">Date</th>
    <th width="60">Action</th>
  </tr>
  <?php 
        $query = "SELECT * FROM feedback";
        $fire = $conn->query($query);

        while($reg = $fire->fetch()) 
        {
            ?>
            <tr>
              <td><?php echo $reg['f_id']; ?></td>
              <td><?php echo $reg['subject']; ?></td>
              <td><?php echo $reg['description']; ?></td>
              <td><?php echo $reg['from_user']; ?></td>
              <td><?php echo $reg['fdbk_date']; ?></td>
              
              <td><a href="feedback.php?id=<?php echo $reg['f_id']; ?>" class="fa fa-reply" title="Reply this feedback" style="font-size: 24px"></a>
              </td>
            </tr>
            <?php
        }
    ?>
</table>

</div>
<div style="margin-top: 148px">
<?php   include "footer.php"; $fire = null; $conn = null; ?>             <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
