<?php
session_start();


$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'traffic_system');

//$id_no = $_POST['user_id'];
$name = $_SESSION["username"];
$vehno =  $_POST["vehicleno"];
$vehtype =  $_POST["vehicle_type"];
$vehname = $_POST["vehicle_name"];


$s = "select * from veh_details where veh_no = '$vehno'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "Vehicle id already exists";
}
else {
  $reg = "insert into veh_details(name,veh_no,veh_type,veh_name) values ('$name','$vehno','$vehtype','$vehname')";
  mysqli_query($con,$reg);
  echo "successfully created";
  header('location:5th.php');
}
?>
