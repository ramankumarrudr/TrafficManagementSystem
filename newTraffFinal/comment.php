<?php
session_start();


$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'traffic_system');

//$id_no = $_POST['user_id'];
$name = $_SESSION["username"];
$comm =  $_POST["comment"];


  $reg = "insert comment(username,comment) values ('$name','$comm')";
  mysqli_query($con,$reg);
  header('location:new_logout.php');
?>
