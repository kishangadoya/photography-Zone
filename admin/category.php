<?php include "header.php"; include "dbconn.php"; ?>

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
  .fa-edit{color: black; font-size:30px; cursor: pointer;} .fa-edit:hover{color: #2eb900;}
  .fa-trash{color: red; font-size:30px; cursor: pointer;} .fa-trash:hover{text-shadow: 0px 0px 25px red;}
  tr:nth-child(even) {
      background-color: #dddddd;
      border-left-color: white!important;
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


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
    .textbox:focus{
        background-color: #f7ff89;
        border-color: blue!important;
        outline: none;
        color: purple;
      }
</style>
</head>
<body>
<div style="padding: 20px 20px 20px 20px">
  <form method="POST" id="form1" enctype="multipart/form-data" style="">
    <center>
      <span style="font-size: 22px">Category:</span> 
      <input type="category" class="textbox" style="font-size: 22px;border: 1px solid grey; padding: 5px; border-radius: 5px;padding-left: 7px;" name="txt" placeholder="Name category">&nbsp;&nbsp;&nbsp;&nbsp;
      <span style="font-size: 22px">Image:</span> <input type="file" style="font-size: 20px;border: 1px solid grey; padding: 5px; border-radius: 5px;" name="file_img" style="font-size: 20px; border:1px solid grey;">
      <input type="submit" name="add" value="ADD" class="submit" title="Add to category">
    </center>
  </form>
  <table>
    <tr>
    <th width="75">c_id</th>
    <th>category</th>
    <th>image</th>
    <th width="200">Action</th>
    
    
    </tr>

    <?php 
      $query = "SELECT * FROM category";
    $fire = mysqli_query($conn,$query);

    while($category = mysqli_fetch_array($fire))
    {
      ?>
      
      <tr>
        <td> <?php echo $category['c_id']; ?>     </td>
        <td> <?php echo $category['category']; ?> </td>
        <td width="700"> <img src="uploads\<?php echo $category['image']; ?>" height="12%" width="30%" title="<?php echo $category['image']?>"/></td>
        <td>
          <center style="opacity: 1;">
            <a href="edit.php?rec=<?php echo $category['c_id']; ?> & nm=<?php echo $category['image']; ?>" class="fa fa-edit" title="Edit image"></a> &nbsp;&nbsp;&nbsp;

            <a class="fa fa-file-picture-o" title="View image" id="myBtn" style="font-size:30px;cursor: pointer;" onclick="display();" ></a> &nbsp;&nbsp;&nbsp;

            <a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $category['c_id']; ?>" class="fa fa-trash" title="Delete image" style="color:red;font-size: 30px;cursor: pointer;"></a>
          </center>
        </td>
      </tr> 

      <?php
    }
    ?>

  </table>
</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Image</h2>
    </div>
    <div class="modal-body" style="height: 60%;padding-top: 20px;">
      <center><img src="src" alt="&nbsp;Image was deleted!"></center>
    </div>
    <div class="modal-footer">
      <h3>Image name.jpg</h3>
    </div>
  </div>

</div>

</body>
</html>
<?php 

  if(isset($_POST['add']))    //insert record
  {
    $cat = $_POST['txt'];
    $img = $_FILES['file_img']['name'];

    $query = "INSERT INTO category(category,image) VALUES('$cat','$img')";
    $fire = mysqli_query($conn,$query) or die("Cant insert data into database".mysql_error($conn));
    move_uploaded_file($_FILES['file_img']['tmp_name'],"uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location="category.php";
      </script>
      <?php
    }
  }
?>
<?php
  if(isset($_GET['del']))      //delete file record 
  {
    $c_id = $_GET['del'];
    $query = "DELETE FROM `category` WHERE `c_id` = $c_id";
    $fire = mysqli_query($conn,$query) or die("can't delete data fromm db! | ".mysqli_error($conn));
    unlink("uploads/".$img);

    if($fire)
    {
      ?>
      <script>
        window.location = "category.php";
      </script>
      <?php
    }
  }
?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function display()   {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

