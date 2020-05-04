<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  h2{margin: 20px; font-size: 20px;}
    .checked{color: #314cd6;}
    .fa{font-size: 32px}
    float{float: right;margin-right: 50px;}
  .blur{
  	-webkit-filter:blur(5px);
  }
.textbox{
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
.submit{
  height: 41px;
  width: 150px;
  margin-left: 20px;
  background: linear-gradient(to right bottom,#ff3765,#730949);
  color: white;
  text-align: center;
  border:none;
  border-radius: 5px; 
}
  .submit{
      width: 150px;
      font-size: 16px;
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      font-size: 20px;
    }
    .submit:hover{ 
      background: linear-gradient(to right bottom,#4483f7,#00595d);
      box-shadow: 0px 0px 10px black!important; color: violet;

       }
       .submit:active{
        background: linear-gradient(to right bottom,#525252,#000000);
       }
       .submit:focus{outline:none;}
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
      width: 50%;
      display: inline;      
    }
    .comman
    {
      display: table-cell;
    }
    .fa-trash{cursor: pointer;font-size: 36px!important;color: #0e91d0;} .fa-trash:hover{color:red;}
    hr
    {    
      border-top: 1px solid #e2e2e2!important;
    margin-bottom: 25px;
    border: 0;
    margin-top: 0px;
    border-top: 1px solid #eee;
    }
}

</style>

</head>

<body>

<?php   include "header.php";  ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php" style="color: #2cbaff;background-color: #1d1d1d">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>
<br>
<center style="font-size: 24px;text-decoration: underline;">Your Gallery</center>

<div style="padding: 25px">
<div class="nev comman">
  <?php
   $client = $_SESSION['client'];

  $q = "SELECT image1 FROM reg_photographers WHERE email='$client'";
  $r = $conn->query($q);
  $rec = $r->fetch(); 

  if($rec['image1']==""){ unset($rec['image1']); }//Null ne pn isset count kre atle pela unset

  if(isset($rec['image1']))
  {   
    $img = $rec['image1'];
    echo' <center>
      <table>
        <tr>  
          <td width=420><center><img src="uploads/'.$img.'" width=100% style="margin-bottom:25px;" title="'.$rec['image1'].'"/></center></td>
          <td width=40><center><a href="deleteimg.php?img='.$rec['image1'].'&id=1" class="fa fa-trash remove" title="Delete this image!"></a></center></td></table></center><hr>';
  }
  else
  {
    echo '<form action="" method="POST" enctype="multipart/form-data">
    <sp style="font-size: 22px">Image:</sp> <input type="file" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="image1" style="font-size: 20px; border:1px solid grey;">
      <input type="submit" name="btn1" value="Upload" class="submit" title="Upload image file"/></form><br><Br>';
  }

  $q = "SELECT image2 FROM reg_photographers WHERE email='$client'";
  $r = $conn->query($q);
  $rec = $r->fetch();

  if($rec['image2']==""){ unset($rec['image2']); }

  if(isset($rec['image2']))
  {   
    $img = $rec['image2'];
    echo '<center><table><tr><td width=420><center><img src="uploads/'.$img.'" width=100% style="margin-bottom:25px;" title="'.$rec['image2'].'"/></center></td><td width=40><center><a href="deleteimg.php?img='.$rec['image2'].'&id=2" class="fa fa-trash remove" title="Delete this image!"></a></center></td></table></center><hr>';
  }
  else
  {
    echo '<form action="" method="POST" enctype="multipart/form-data">
    <sp style="font-size: 22px">Image:</sp> <input type="file" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="image2" style="font-size: 20px; border:1px solid grey;">
      <input type="submit" name="btn2" value="Upload" class="submit" title="Upload image file"/></form><br><Br>';
  }
  ?>
</div>

<div class="middle comman">
  <?php

  $q = "SELECT image3 FROM reg_photographers WHERE email='$client'";
  $r = $conn->query($q);
  $rec = $r->fetch();

  if($rec['image3']==""){ unset($rec['image3']); }

  if(isset($rec['image3']))
  {   
    $img = $rec['image3'];
    echo '<center><table><tr><td width=420><center><img src="uploads/'.$img.'" width=100% style="margin-bottom:25px;" title="'.$rec['image3'].'"/></center></td><td width=40><center><a href="deleteimg.php?img='.$rec['image3'].'&id=3" class="fa fa-trash remove" title="Delete this image!"></a></center></td></table></center><hr>';
  }
  else
  {
    echo '<form action="" method="POST" enctype="multipart/form-data">
    <sp style="font-size: 22px">Image:</sp> <input type="file" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="image3" style="font-size: 20px; border:1px solid grey;">
      <input type="submit" name="btn3" value="Upload" class="submit" title="Upload image file"/></form><br><Br>';
  }
  
  $q = "SELECT image4 FROM reg_photographers WHERE email='$client'";
    $r = $conn->query($q);
  $rec = $r->fetch();

  if($rec['image4']==""){ unset($rec['image4']); }

  if(isset($rec['image4']))
  {   
    $img = $rec['image4'];
    echo '<center><table><tr><td width=420><center><img src="uploads/'.$img.'" width=100% style="margin-bottom:25px;" title="'.$rec['image4'].'"/></center></td><td width=40><center><a href="deleteimg.php?img='.$rec['image4'].'&id=4" class="fa fa-trash remove" title="Delete this image!"></a></center></td></table></center><hr>';
  }
  else
  {
    echo '<form action="" method="POST" enctype="multipart/form-data">
    <sp style="font-size: 22px">Image:</sp> <input type="file" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="image4" style="font-size: 20px; border:1px solid grey;">
      <input type="submit" name="btn4" value="Upload" class="submit" title="Upload image file"/></form><br><Br>';
  }
?>
</div>
</div>

</body>
</html>
  
<?php    
  if(isset($_POST['btn1']))    //insert record
  {
    $img = $_FILES['image1']['name'];
    $client = $_SESSION['client'];
    $query = "UPDATE reg_photographers SET image1='$img' WHERE email='$client'";
    $fire = $conn->query($query);
    move_uploaded_file($_FILES['image1']['tmp_name'],"uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location="gallery.php";
      </script>
      <?php
    }
  }

  if(isset($_POST['btn2']))    //insert record
  {
    $img = $_FILES['image2']['name'];
    $client = $_SESSION['client'];
    $query = "UPDATE reg_photographers SET image2='$img' WHERE email='$client'";
    $fire = $conn->query($query);
    move_uploaded_file($_FILES['image2']['tmp_name'],"uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location="gallery.php";
      </script>
      <?php
    }
  }

    if(isset($_POST['btn3']))    //insert record
  {
    $img = $_FILES['image3']['name'];

    $query = "UPDATE reg_photographers SET image3='$img' WHERE email='$client'";
    $fire = $conn->query($query);
    move_uploaded_file($_FILES['image3']['tmp_name'],"uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location="gallery.php";
      </script>
      <?php
    }
  }

    if(isset($_POST['btn4']))    //insert record
  {
    $img = $_FILES['image4']['name'];

    $query = "UPDATE reg_photographers SET image4='$img' WHERE email='$client'";
    $fire = $conn->query($query);
    move_uploaded_file($_FILES['image4']['tmp_name'],"uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location="gallery.php";
      </script>
      <?php
    }
  }  
?>