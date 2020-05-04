<?php session_start(); 
  if(isset($_SESSION['user'])==true)
  { include 'headeruser.php'; }
  else{ include 'header.php';} ?>