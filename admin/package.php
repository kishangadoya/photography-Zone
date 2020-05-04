<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>

<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  .remove{}
    .remove:hover{color: red;text-shadow: 0px 0px 10px red;}  </style>
</head>

<body>

<?php   include "header.php"; include 'dbconn.php';  ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php">User</a>
  <a href="package.php" style="color: #2cbaff;background-color: #1d1d1d">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<div style="padding:25px">
  <table>
  <tr>
    <th>pid</th>
    <th>Package name</th>
    <th>Bookings</th>
    <th>Description</th>
    <th>Quality</th>
    <th>Clicks</th>
    <th>Hrs</th>
    <th>Drone</th>
    <th>Price in <inr class="fa fa-inr"></inr></th>
    
  </tr>
  
    <?php 
        $query = "SELECT * FROM package";
        $fire = $conn->query($query);

        while($package = $fire->fetch()) 
        {
            ?>
            <tr>
              <td><?php echo $package['pid']; ?></td>
              <td><?php echo $package['package_name']; ?></td>
              <td><?php echo "-"; ?></td>
              <td><?php echo $package['description']; ?></td>
              <td><?php echo $package['quality']; ?></td>
              <td><?php echo $package['clicks']; ?></td>
              <td><?php echo $package['hours']; ?></td>
              <td><?php echo $package['drone']; ?></td>
              <td><inr class="fa fa-inr"></inr> <?php echo $package['price']; ?></td>
              
            </tr>
            <?php
        }
    ?>
  
</table>
</div>

<div style="margin-top: 143px">
<?php   include "footer.php"; $fire = null; $conn = null; ?>             <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
