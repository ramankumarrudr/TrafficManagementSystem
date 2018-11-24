<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'traffic_system');

//$id_no = $_POST['user_id'];
$name =  $_POST['user'];
$pass =  $_POST['password'];
$area = $_POST['travel_area'];
$phone = $_POST['phone_no'];
$vehicle = $_POST['vec_no'];

$s = "select * from user_table where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "Username or Id already exit";
}
else {
  $reg = "insert into user_table(username,password,vehicleNo,travelArea,phoneNo) values ('$name','$pass','$vehicle','$area',$phone)";
  mysqli_query($con,$reg);
  echo "successfully created";
  header('location:trafficUserLogin.php');
}
?>
