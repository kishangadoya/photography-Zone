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
  .remove{}
  .remove:hover{color: red;text-shadow: 0px 0px 10px red;}
  .fa-eye{color: #d202d2; font-size:30px; cursor: pointer;} .fa-eye:hover{color: #0e91d0;}
  .fa-trash{color: red; font-size:30px; cursor: pointer;} .fa-trash:hover{text-shadow: 0px 0px 25px red;color: red;}
  </style>
</head>

<body>

<?php   include "header.php"; include 'dbconn.php';  ?>      <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php" style="color: #2cbaff;background-color: #1d1d1d">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<div style="padding:25px">
  <table>
  <tr>
    <th>u_id</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Registered Date</th>
    <th>Action</th>
  </tr>
  <?php 
        $query = "SELECT * FROM reg_users";
        $fire = $conn->query($query);

        while($reg = $fire->fetch()) 
        {
            ?>
            <tr>
              <td><?php echo $reg['u_id']; ?></td>
              <td><?php echo $reg['name']; ?></td>
              <td><?php echo $reg['contact']; ?></td>
              <td><?php echo $reg['reg_date']; ?></td>
              <td><a href="userdetail.php?id=<?php echo $reg['u_id']; ?>" class="fa fa-eye" title="View Photographer"></a> &nbsp;&nbsp;    
              <a href="user.php?del=<?php echo $reg['u_id']; ?>" class="fa fa-trash" title="Delete this Photographer"></a>
              </td>
            </tr>
            <?php
        }
    ?>
  </table>

</div>

<div style="margin-top: 308px">
<?php   include "footer.php";  ?>       <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
<script>
var close = document.getElementsByClassName("remove");
var i,n=0;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    } 
}
</script>
<?php
  if (isset($_GET['del'])) 
  {
    $del = $_GET['del'];
    $q = "DELETE FROM reg_users WHERE u_id='$del'";
    $conn->query($q);

    if($q)
      ?> <script type="text/javascript">window.location="user.php";</script> <?php
  }
$fire = null; $conn = null; ?>