	<?php session_start(); include 'dbconn.php';
	if(isset($_SESSION['admin'])==false)
	{ ?><script>alert("login first"); window.location="index.php";</script><?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Photography Zone</title>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
	a{text-decoration:none;}
	tr:nth-child(even) {
			background-color: #dddddd;
			border-left-color: white!important;

	}
	.remove{}
		.remove:hover{color: red;text-shadow: 0px 0px 10px red;}
		.checked{color: #314cd6;}
		.fa-star, .fa-star-o{font-size: 26px;}
		.fa-eye{color: #d202d2; font-size:30px; cursor: pointer;} .fa-eye:hover{color: #0e91d0;}
		.fa-trash{color: red; font-size:30px; cursor: pointer;} .fa-trash:hover{text-shadow: 0px 0px 25px red;}

	</style>
</head>

<body>

<?php   include "header.php";   ?>            <!-- - - - - - - - - - - Header - - - - - - - - -->
	<a href="home.php" style="margin-left: 15px;">Home</a>
	<a href="photographer.php" style="color: #2cbaff;background-color: #1d1d1d">Photographer</a>
	<a href="category2.php">Category</a>
	<a href="user.php">User</a>
	<a href="package.php">Package</a>
	<a href="order.php">Order</a>
	<a href="feedback.php">Feedback</a>

</div>
<div style="padding:25px">
<table>
	<tr>
		<th>P. ID</th>
		<th>Name</th>
		<th>Category</th>
		<th>Studio</th>
		<th>Exp.</th>
		<th width="150">Registered date</th>
		<th>Rating</th>
		<th>Action</th>
	</tr>
	
		<?php 

				$query = "SELECT * FROM reg_photographers";
				$fire = $conn->query($query);

				while($reg = $fire->fetch()) 
				{
						?>
						<tr>
							<td><?php echo $reg['id']; ?></td>
							<td><?php echo $reg['name']; ?></td>
							<td><?php if($reg['category']==1)echo 'Photographer'; else if($reg['category']==2) echo 'Videography'; else echo 'Both'; ?></td>
							<td><?php echo $reg['studio']; ?></td>
							<td><?php echo $reg['exp']; ?></td>
							<td><?php echo $reg['reg_date']; ?></td>
							<td><?php if($reg['rating']==5)
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
												}?>        </td>
							<td><a href="photographerdetail.php?id=<?php echo $reg['id']; ?>" class="fa fa-eye" title="View Photographer"></a> &nbsp;&nbsp;   
							 <a href="photographer.php?del=<?php echo $reg['id']; ?>" class="fa fa-trash" title="Delete this Photographer"></a>
							</td>
						</tr>
						<?php
				}
		?>
	
</table>

</div><div style="margin-top: 303px">
<?php   include "footer.php";  ?><!-- - - - - - - - - - - Footer - - - - - - - - -->
</div>
</body>
</html>
<?php
	if (isset($_GET['del'])) 
	{
		$del = $_GET['del'];
		$q = "DELETE FROM reg_photographers WHERE id='$del'";
		$conn->query($q);
		
		if($q)
			?> <script type="text/javascript">window.location="photographer.php";</script> <?php
	}
$con = null; $fire = null; ?>

