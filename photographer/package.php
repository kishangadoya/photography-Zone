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
  table {
    font-family: dominik;
    font-size: 20px;
    border-collapse: collapse;
    width: 100%;
  }
  table tr th {font-weight: normal;}
  td, th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
  }
  th{background-color: #333333; color: white}
  a{text-decoration:none;color: #0e91d0; font-size: 24px;}  a:hover{color: #2eb900;}
  tr:nth-child(even) {
      background-color: #dddddd;
      border-left-color: white!important;
  }

  .textbox{
    font-size: 22px;
    border: 1px solid grey; 
    padding: 5px; 
    border-radius: 5px;
    padding-left: 8px;
  }
  .textbox:focus{
    background-color: #f7ff89;
    border-color: blue!important;
    outline: none;
    color: purple;
  }
  .submit{
    color: white;
    text-align: center;
    background: linear-gradient(to right bottom,#ff3765,#730949);
    border:none;
    border-radius: 5px;
    width: 148px;
    height: 39px;
    border-radius: 5px;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    font-size: 20px;
  }
  .submit:hover{ 
    background: linear-gradient(to right bottom,#4483f7,#00595d);
    box-shadow: 0px 0px 10px black!important; color: violet;
  }
  .submit:focus{outline:none; background:linear-gradient(to right bottom,#525252,#000000);}
  #addpackage{display: none;}
  #addnew{cursor: pointer;}
  .fa-trash{cursor: pointer;font-size: 30px!important;} .fa-trash:hover{color:red;}

  #snackbar {
    visibility: hidden;
    width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    position: fixed;
    border-radius: 2px;
    padding: 16px;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 3.5s;
    animation: fadein 0.5s, fadeout 0.5s 3.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
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
  border: 1px solid grey;
  border-radius:5px;
  position: initial;
  opacity: 1;
  -webkit-transition: 0.8s;
    -transition: 0.8s;
}
.textbox:focus{
  width:283px;
  outline: none;
  border: 1px solid black!important;
  background-color: white!important;
}
  </style>
</head>

<body>

<?php include "header.php";

if(isset($s))
{
  //myFunction(); unset($s);
}
?>
<!-- - - - - - - - - - - Header - - - - - - - - -->
<a href="home.php" style="margin-left: 15px">Home</a>
  <a href="photographer.php">My Portfolio</a>
  <a href="gallery.php">View Gallery</a>
  <a href="category.php">Offers</a>
  <a href="package.php" style="color: #2cbaff;background-color: #1d1d1d">Packages</a>
  <a href="order.php">My Orders</a>
  <a href="feedback.php">Feedback&nbsp;<c class="fa fa-paper-plane" style="color: #0e91d0"></c></a>

  <form><input type="text" style="" name="search" placeholder="Search" class="textbox" />
      <button class="fa fa-search" style="float:left!important;height:33px!important;width: 40px!important;margin: 5px 0px;border: none;padding:2px;font-size: 20px;border-radius:0px 5px 5px 0px;" name="btn"></button>
  </form>
    <a href="contactus.php" style="margin-right: 20px!important;float:right!important">Contact us</a>

</div>

<div style="padding:25px">
  <a id="addnew" onclick="display()" style="border: 1px solid black;border-radius: 5px;padding: 1px 5px 3px 5px;">Add New</a><br><br>

  <div id="addpackage" style="line-height: 0.5">
    <form action="#" method="POST">
    <input class="textbox" type="text" name="pkgnm" placeholder="Package name"/>
    <input class="textbox" type="text" name="des" placeholder="Description..."/>
    <input class="textbox" type="text" name="price" placeholder="Price in INR"/>
    <input class="textbox" type="text" name="vldty" placeholder="Validity" style="opacity: 0.75" disabled><br><br>

    <input class="textbox" type="text" name="qlty" placeholder="Capture quality"/>
    <input class="textbox" type="text" name="clks" placeholder="Clicks"/>
    <input class="textbox" type="text" name="hrs" placeholder="Hours"/>
    <input class="textbox" type="text" name="drn" placeholder="Drone"/>
    <input class="submit" type="submit" name="addpkg" value="ADD" style="margin:5px;" />
    </form><br>
  </div>

  <table>
  <tr>
    <th>pid</th>
    <th>Package name</th>
    <th>Bookings</th>
    <th>Description</th>
    <th>Quality</th>
    <th>Clicks</th>
    <th>H/rs</th>
    <th>Drone</th>
    <th>Price in <inr class="fa fa-inr"></inr></th>
    <th>Delete</th>
  </tr>
  
    <?php 
        $client = $_SESSION['client'];
        $query = "SELECT * FROM package WHERE client='$client'";
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
              <td><a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $package['pid']; ?>" class="fa fa-trash"></a></td>
            </tr>
            <?php
        }
    ?>
  
</table>
  
</div>
<center>
    <div id="snackbar">Successfully inserted</div>
</center>

<div style="margin-top: 143px">
<?php   include "footer.php";  ?>       <!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>

<?php 

    if (isset($_POST['addpkg'])) 
    {
        $pkgnm = $_POST['pkgnm'];
        $des = $_POST['des'];
        $price = $_POST['price'];
        $qlty = $_POST['qlty'];
        $clks = $_POST['clks'];
        $hrs = $_POST['hrs'];
        $drn = $_POST['drn'];

        $client = $_SESSION['client'];
        $id = $conn->query("SELECT id from reg_photographers WHERE email='$client'");
        $rec = $id->fetch();
        $r=$rec['id'];

        $query = "INSERT INTO package VALUES('','$r','$client','$pkgnm','$des','$qlty','$clks','$hrs','$drn','$price')";

        $fire = $conn->query($query);
        if($fire)
        {
        ?>
            <script> window.location = "package.php"; </script>
        <?php
        }
        else
        {
        ?>
            <script> alert("Package cant be inserted"); </script>
        <?php
        }

    }
?>
<?php
  if(isset($_GET['del']))      //delete file record 
  {
    $pid = $_GET['del'];
    $query = "DELETE FROM `package` WHERE `pid` = $pid";
    $fire = $conn->query($query);

    if($fire)
    {
      ?>
      <script>
        window.location = "package.php";
      </script>
      <?php
    }
  }
$fire = null; $conn = null; ?>

<script>
  function display() {
    document.getElementById("addpackage").style.display="block";
  }

  function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); },4000);
  }

</script>