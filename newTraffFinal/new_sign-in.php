<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'traffic_system');

$name =  $_POST['user'];
$pass =  $_POST['password'];

$s = "select * from user_table where username = '$name'&& password='$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username'] = $name;
  header('location:1st.php');
}
else {
  header('location:trafficUserLogin.php');
}
?>
