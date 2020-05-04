<?php session_start(); 
  if(isset($_SESSION['client'])==false)
  { ?><script>alert("login first"); window.location="index.php";</script><?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Photography Zone</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      .box{
      width: 97%;
      height: auto;
      margin:10px;
      float: left;    
      border-radius: 5px;
      box-shadow: 1px 2px 12px black;
      font-size: 28px;
      padding: 10px;
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
    }
    .box:hover{box-shadow: 1px 1px 18px #002bff;}
    .checked{color: #314cd6;}
    .remove{}
    .remove:hover{text-shadow: 0px 0px 10px red;}
    .checked{color: #314cd6;}
    input,textarea{font-size: 32px; border-radius: 5px; border:1px solid black; padding-left: 6px; font-family: dominik;box-shadow: 0px 0px 3px black;padding-bottom: 3px;}
    input:focus{
        background-color: #f7ff89;
        border-color: blue!important;
        outline: none;
        color: purple;}
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
    .submit:active{ background: linear-gradient(to right bottom,#525252,#000000); }
    .submit:focus{outline:none;}
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
      width:283px;
      outline: none;
      border: 1px solid white!important;
      background-color: white!important;
    }
    .fa-star,.fa-star-o{font-size: 24px;}
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
      display: table-cell;
    }
    .img
    {
      margin-top: -10px;
      margin-left: 75px;
    }

    .upload-btn-wrapper {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .btn {
      border: 1px solid grey;
      background-color: white;
      padding: 8px 10px;
      border-radius: 5px;
      font-size: 20px;
      margin-left: 198px;
      margin-top: 10px;
      }

    .upload-btn-wrapper input[type=file] {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }
  </style>
</head>

<body>

<?php   include "header.php";

        $client = $_SESSION['client'];
        $query = "SELECT * FROM reg_photographers WHERE email='$client'";
        $fire = $conn->query($query);

        while($reg = $fire->fetch()) 
        { ?>     

<a href="home.php" style="margin-left: 15px;">Home</a>
  <a href="photographer.php" style="color: #2cbaff;background-color: #1d1d1d">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>
</div>

<div>
  <nav class="nev">
    <br><br><br>

    <br>
    <img src="uploads\<?php echo $reg['profile']; ?>" height="400px" width="400px" title="<?php echo $reg['profile']?>" style="border-radius: 5px" class="img"/>
    <div>
      <form action="" method="POST" enctype="multipart/form-data" id="profileform">
      <input type="file" style="font-size: 16px;border: 1px solid grey; padding: 5px; border-radius: 5px;margin-left: 30px;margin-top: 13px;" name="profile">
      
      <input type="submit" name="profileok" value="Upload" class="submit" title="Upload image file" style="height: 38px;" />
      </form>
    </div>
    <br><br>
  
  </nav>
</div>

<div class="middle comman">
    <br><br>
  <div style="">
	<form style="font-size: 32px; line-height: 1.5" method="post" action="">
    <center>
      <table>
    <tr>
		  Your ID: <?php echo $reg['id']; ?><br>
    
    </tr>
    <tr>
		  <td>Name: </td><td><input type="text" name="name" value="<?php echo $reg['name']." ".$reg['surname']; ?>" style="border: none;" disabled/></td>
		</tr>
    <tr>
      <td>DoB: </td><td><input type="date" name="dob" value="<?php echo $reg['bday']; ?>"/></td>
		</tr>
    <tr>
      <td>Category: </td><td><input type="text" value="<?php if($reg['category']==1)echo 'Photographer'; else if($reg['category']==2) echo 'Videography'; else echo 'Both'; ?>"/></td>
		</tr>
    <tr>
      <td>Name of Studio: </td><td><input type="text" name="studio" value="<?php echo $reg['studio'];?>"/></td>
    </tr>
    <tr>
      <td>Address:<br>&nbsp; </td><td><textarea style="width: 412px;" name="add"><?php echo $reg['address'];?></textarea></td>
		</tr>
    <tr>
      <td>Achievements: </td><td><input type="text" name="achieve" value="<?php echo $reg['achieve'];?>"/></td>
    </tr>
    <tr>
      <td>Awards: </td><td><input type="text" name="awards" value="<?php echo $reg['awards'];?>"/></td>
    </tr>
    <tr>
      <td>Skills: </td><td><input type="text" name="skills" value="<?php echo $reg['skills'];?>"/></td>
    </tr>
    <tr>
      <td>Your Ratings: </td>
      <td>
          <?php 
            if($reg['rating']==5)
            {
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
            }
            else if($reg['rating']==4)
            {
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star-o"></star>';
            }
            else if($reg['rating']==3)
            {
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
            }
            else if($reg['rating']==2)
            {
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
            }
            else
            {
              echo '<star class="fa fa-star checked"></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
              echo '<star class="fa fa-star-o "></star>';
            }?>
      </td>
  </tr>
  <tr>
    <td colspan="2"><center><input type="submit" class="submit" name="submit" value="Update" style="box-shadow: none;padding-bottom: 5px;cursor: pointer;" /></center></td>
  </tr>
  </table>
  </center>
  </div>  
	</form>
</div><?php } ?> <br>
<div>
<?php   include "footer.php";  ?>     <!-- - - - - - - - - - - Footer - - - - - - - - -->
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
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $studio = $_POST['studio'];
    $add = $_POST['add'];
    $achieve = $_POST['achieve'];
    $awards = $_POST['awards'];
    $skills = $_POST['skills'];
    $client = $_SESSION['client'];

    $q = "UPDATE reg_photographers SET bday='$dob',studio='$studio',achieve='$achieve',awards='$awards',skills='$skills',address='$add' WHERE email='$client'";
    $f = $conn->query($q);
    ?><script>window.location="photographer.php";</script> <?php
  }
?>

<?php    
  if(isset($_POST['profileok']))    //update image
  {

    $q = "SELECT * FROM reg_photographers WHERE email='$client'";
    $f = $conn->query($q);
    $oldimg = $f->fetch();          //remove old image
    unlink("uploads/".$oldimg['profile']);

    $img = $_FILES['profile']['name'];
    $client = $_SESSION['client'];
    $query = "UPDATE reg_photographers SET profile='$img' WHERE email='$client'";
    $fire = $conn->query($query);
    move_uploaded_file($_FILES['profile']['tmp_name'],"uploads/".$img);//upload to server

    if($fire)
    {
      ?>
      <script>
        window.location="photographer.php";
      </script>
      <?php
    }
  }
$fire = null; $conn = null; ?>