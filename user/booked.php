<?php
$conn = mysqli_connect("localhost","root","","pz") or die("Could not connect to db");

    if(isset($_POST['submit']))
    {
    	$pid = $_GET['pid'];
    	$pnm = $_GET['pnm'];
    	$date = $_POST['date'];
    	$venue = $_POST['venue'];
    	$desc = $_POST['desc'];
    	$user = $_SESSION['user'];
    	$datenow = date("d/m/Y");
        $query = "INSERT INTO orders(party,pid,package,venue,booked_on,booked_date,description,status) VALUES('$user','$pid','$pnm','$venue','$datenow','$date','$desc','pending')";
        $fire = mysqli_query($conn,$query);
    }
    header("location:orders.php")
?>