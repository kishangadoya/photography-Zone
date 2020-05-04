<?php session_start(); 
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{ include 'header.php';} ?>

<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png" />
  <style>
    .big
    {
      height: 40px;
      width: 200px;
      font-size: 20px;
      border-radius: 5px;
    }
    .img
    {
      margin-top: 10px;
      margin-left: 75px;
    }
 
    .body
    {
      left-margin: 12;
      height:1000px;
      width:1345px;
      font-family: verdana;
    }

    .header
    {
      height:60px;
      padding: 25px;
    }

    .nev
    {
      height: auto;
      width: 600px;
      display: inline;
      float: left;
    }
    .middle
    {
      margin-top: 40px;
      margin-left:495px;
      height: auto;
      width: auto;
      display: inline;      
    }
    .comman
    {
      padding-top: 8px;
      display: table-cell;
    }
    .space
    {
      margin-left:20px;
    }
    .radiospace
    {
      margin-top: 18px;
      letter-spacing: 1px;
      font-family: verdana;
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
      margin-right: 10px;
      margin-left: 40px;
    }
    .footer
    {
      height: 90px;
      background-color: grey;
      color: white;
      line-height: 1.5;
    }
    table {
      font-family: verdana;
      font-size: 24px;
      border-collapse: collapse;
      width: 100%;
      line-height: 1.5;
  }
  table tr th{font-weight: normal;}
  td, th {
      text-align: left;
      padding: 8px;
  }
  th{}
  a{text-decoration:none;}
  input{-webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;font-size: 18px!important;}
  input:hover{background-color: white!important;color: #29ce14!important;border: 1px solid #29ce14!important;}
    input:focus{outline: none!important;}
  .input:focus{outline: none!important;}
  .input{-webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;}
  .input:hover{background-color: white!important;color: blue!important;border: 1px solid blue!important;}
      .checked{color: #314cd6;}
      hr{border-top: 1px solid #e2e2e2!important;}
  </style>
</head>

<body style="margin-top: 50px;">
<?php  include 'dbconn.php';

        $id = $_REQUEST['id'];
        $query = "SELECT * FROM reg_photographers WHERE id='$id'";
        $fire = $conn->query($query); $reg = $fire->fetch(); ?>

<div>
  <nav class="nev comma">
    <br><br><br>
    <img src="../photographer/uploads/<?php echo $reg['profile']; ?>" height="400px" width="400px" class="img">
  </nav>
</div>

<div class="middle comman">
    <br><br>
      <span style="font-size: 35px;font-weight:bold;margin-top: 370px;"><?php if($reg['category']==1) echo "Photographer Detail"; else echo "Videographer Detail";?></span><hr>
<div>
<form style="font-size: 28px">
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
  </table>
  </center>
  </form><hr style="min-width: 510px">
</div>
    <a href="viewportfolio.php?id=<?php echo $reg['id']; ?>"><input type="submit" name="register" class="btn" value="View Portfolio" style="cursor:pointer; background-color:#29ce14; border:none; border-radius:3px;width: 160px;margin-left: 75px;"></a>

    <a href="viewpackage.php?id=<?php echo $reg['id']; ?>"><input type="submit" value="View Packages" name="Reset"  class="btn input" style="margin-left: 13px; background-color:blue; border:none; border-radius:3px;width: 160px;"></a><br><br> 
</div>      
   
</form>
 
</body>
</html>
<?php $fire = null; $conn = null; ?>