<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'traffic_system');
$area =  $_POST['travel_area'];
$time =  $_POST['Time'];
$GLOBALS['no_veh'] = $_POST['no_of_vehicles'];
function trafficLevel(){
  $min_traff_level = 50;
if ($min_traff_level <= $GLOBALS['no_veh']) {
   $GLOBALS['traff_level'] = "High traffic";
   return( $GLOBALS['traff_level']);
 }
 else {
   $GLOBALS['traff_level'] = "Low traffic";
   return($GLOBALS['traff_level']);
 }
}
$traff_lvl = trafficLevel();
include 'traff_level_fetch.php';
echo '<html>';
echo '<body style="background-color:#80C6FF">';
if ($traff_lvl=="High traffic") {
  echo '<h1 style="text-align:center;padding-top:350px"> At ' . $area . "-" . $traff_lvl. ': To look for Diversions <br> <a href="diversions.php" style="text-align:center">Click Here!</a> </h1>'  ;
}
else {
  echo '<h1 style="text-align:center; padding-top:350px"> At ' . $area . "-" . $traff_lvl. ': Enjoy your ride <br> <a href="1st.php" style="text-align:center">Home</a> </h1>'  ;
}
echo '</body>';
echo '</html>';
?>
