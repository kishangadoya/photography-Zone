<?php session_start(); 
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{ include 'header.php';} ?>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <style>
    hr{border-top: 1px solid #e2e2e2!important; width: 95%}

    table {
      font-family: verdana;
      font-size: 24px;
      border-collapse: collapse;
      line-height: 1.5;
  }
  table tr th{font-weight: normal;}
  td, th {
      text-align: left;
      padding: 8px;
  }
        .checked{color: #314cd6;}
        .nev
    {
      height: auto;
      width: 50%;
      display: inline;
      float: left;
    }
    .middle
    {
      margin-left:495px;
      height: auto;
      width: 10%;
      display: inline;      
    }
    .comman
    {
      display: table-cell;
      padding: 25px;
    }

  </style>
  <?php include 'dbconn.php';
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM reg_photographers WHERE id='$id'";
        $fire = $conn->query($query); $reg = $fire->fetch(); ?>
  <div>
  	<center style="padding-top: 72px!important">
  		    <img src="../photographer/uploads/<?php echo $reg['profile']; ?>" height="100px" width="100px" class="img"><br>
  		    <span style="font-size: 24px;font-weight: bold;"><?php echo $reg['name']; ?></span>
  		</center>
  	</div><hr style="margin-top: 8px;">
    <div>
    <center>
  		    <table>
  <tr>
    <td width="240">Photographer ID: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['id']; ?></td>
  </tr>
  <tr>
    <td>Name: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['name']; ?></td>
  </tr>
  <tr>
    <td>Category: </td><td style="text-align: left!important;padding-left: 20px;"><?php if($reg['category']==1) echo "Photography"; else if($reg['category']==2) echo "Videography"; else echo "Both"; ?></td>
  </tr>
  <tr>
    <td>Studio: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['studio']; ?></td>
  </tr>
  <tr>
    <td>Experience: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['exp']; ?> Years</td>
  </tr>
  <tr>
    <td>Registered date: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['reg_date']; ?></td>
  </tr>
  <tr>
    <td>Ratings: </td>
    <td style="text-align: left!important;padding-left: 20px;">
    <?php if($reg['rating']==5)
    {
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
    }
    else if($reg['rating']==4)
    {
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star-o"></span>';
    }
    else if($reg['rating']==3)
    {
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
    }
    else if($reg['rating']==2)
    {
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
    }
    else
    {
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
      echo '<span class="fa fa-star-o "></span>';
    }?>
    </td>
  </tr>
  <tr>
    <td>Achievements: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['achieve']; ?></td>
  </tr>
  <tr>
    <td>Awards: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['awards']; ?></td>
  </tr>
  <tr>
    <td>Skills: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['skills']; ?></td>
  </tr>
  <tr>
    <td>Address: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['address']; ?></td>
  </tr>
  </table><hr>
  </center>
</div>
<div>
	<center>
  	<span style="font-size: 24px;font-weight: bold;">Gallery</span></center>
</div>
<div class="nev comman">

    <?php
    $q = "SELECT image1,image2,image3,image4 FROM reg_photographers WHERE id='$id'";
    $f = $conn->query($q);
    $i=0;
    $rec = $f->fetch();
    /*while($i<4)
    {
      ?>
      <img src="../photographer/uploads/<?php echo $rec[$i]; ?>" width="50%" style="display: inline;">
      <?php 
      $i++;
    }*/
    ?>
    <center>
    <table>
    <tr><td><center><img src="../photographer/uploads/<?php echo $rec['image1']; ?>" width=100% style="margin-bottom:25px;"/></center></td>
    </tr>
    <tr><td><center><img src="../photographer/uploads/<?php echo $rec['image2']; ?>" width=100% style="margin-bottom:25px;"/></center></td>
    </tr>
    </table></center><hr>
</div>
<div class="middle comman">
  <center>
  <table>
    <tr><td><center><img src="../photographer/uploads/<?php echo $rec['image3']; ?>" width=100% style="margin-bottom:25px;"/></center></td>
    </tr>
    <tr><td><center><img src="../photographer/uploads/<?php echo $rec['image4']; ?>" width=100% style="margin-bottom:25px;"/></center></td>
    </tr>
    </table></center><hr>
</div> <?php $fire = null; $f = null; $conn = null; ?>