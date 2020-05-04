<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
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
  }    .checked{color: #314cd6; }
    .fa-star,.fa-star-o{padding-right: 3px;font-size: 24px;}
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
        hr{border-top: 1px solid #e2e2e2!important; width: 95%}

  </style>
</head>

<?php   include "header.php"; include 'dbconn.php'; ?>     <!-- - - - - - - - - - - Header - - - - - - - - -->
  <a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php" style="color: #2cbaff;background-color: #1d1d1d">Photographer</a>
  <a href="category2.php">Category</a>
  <a href="user.php">User</a>
  <a href="package.php">Package</a>
  <a href="order.php">Order</a>
  <a href="feedback.php">Feedback</a>

</div>
<?php 
		$id = $_GET['id'];
        $query = "SELECT * FROM reg_photographers WHERE id ='$id'";
        $fire = $conn->query($query);
        $reg = $fire->fetch(); ?>

<div style="padding:20px">
<form style="font-size: 28px">
	<center>
	<table>
	<tr>
		<td width="250">Photographer ID: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['id']; ?></td>
	</tr>
	<tr>
		<td>Name: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['name']; ?></td>
	</tr>
	<tr>
		<td>Birthday: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['bday']; ?></td>
	</tr>
	<tr>
		<td>Gender: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['gender']; ?></td>
	</tr>
	<tr>
		<td>Category: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['category']; ?></td>
	</tr>
	<tr>
		<td>Studio: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['studio']; ?></td>
	</tr>
	<tr>
		<td>Experience: </td><td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['exp']; ?></td>
	</tr>
	<tr>
		<td>Skills: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['skills']; ?></td>
	</tr>
	<tr>
		<td>Address: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['address']; ?></td>
	</tr>
	<tr>
		<td>Registered date: </td>
		<td style="text-align: left!important;padding-left: 20px;"><?php echo $reg['reg_date']; ?></td>
	</tr>
	<tr>
		<td>Ratings: </td>
		<td style="text-align: left!important;padding-left: 20px;">
		<?php   if($reg['rating']==5)
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

	</table>
	</center>
	</form>
</div><div>
	<center>
  	<span style="font-size: 24px;font-weight: bold;">Gallery</span></center>
</div>
<div class="nev comman">

    <?php
    $id = $_GET['id'];
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
    <tr><td height="50%"><center><img src="../photographer/uploads/<?php echo $rec['image2']; ?>" width=100% style="margin-bottom:25px;"/></center></td>
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
</div>
<?php $fire=$f=$conn=null;