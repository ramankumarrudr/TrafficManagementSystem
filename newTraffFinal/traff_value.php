<!Doctype html>
<?php                                             //Check for login Session
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
?>
<html>
<head>
  <style>
.cen{
  text-align: center;
}
     body{
      background-image: url("images/ht.jpg");
      background-size: 100%;
      background-position: full;
      background-repeat: repeat;
     }
     </style>
</head>
<body >
  <div style="float:left">
      <h1><a href="1st.php">Home</a></h1>
  </div>
  <div style="padding-top:150px">
<?php
include 'traff_fun.php';
if ($traff_lvl == "High traffic"){
echo '<h1 class="cen"> At' . $area . "-" . $traff_lvl. ': To look for Diversions <a href="diversions.php">Click Here!</a> </h1>'  ;
}
else {
  echo '<h1 class="cen"> At ' . $area . "-" . $traff_lvl. '</h1>'  ;

}

?>
</div>
</body>
</html>
