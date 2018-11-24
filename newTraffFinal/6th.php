<!DOCTYPE html>
<?php                                             //Check for login Session
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<IMG STYLE="position:absolute;top:150px; left:10px; width:550px; height:300px" SRC="images/fu.jpg">
         <style>
            body{
             background-image: url("images/ht.jpg");
           background-size: 100%;
background-position: full;
background-repeat: repeat;
            }
            </style>
            <h1 style="color:black;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="user_comment.php" style="float:right">Logout</a><h1>
        <title>traffic management</title>
    </head>
    <body bgcolor="#E6E6FA"
<center>
         <h1 align="right"><font  color="black" face="ink free"size="8">TRAFFIC MANAGEMENT SYSTEM</font></h1>
        <form action="traff_fun.php" method="POST">
            <h2 align="right">TRAFFIC  &emsp; &emsp;</h2>



<h3 align="right">Area:  &emsp;
  <select id="travel_area" name="travel_area" style="width:375px" required>
        <option value="Unselected"  disabled selected>Select the Area<option>
        <option value="Cantonment">Cantonment</option>
        <option value="Domlur">Domlur</option>
        <option value="Indiranagar">Indiranagar</option>
        <option value="Malleswaram">Malleswaram</option>
        <option value="Rajajinagar">Rajajinagar</option>
        <option value="Seshadripuram">Seshadripuram</option>
    </select> </h3>
<h3 align="right">Time:  &emsp;<input type="time" name="Time" placeholder="Enter Time" required></h3>
<h3 align="right">no_of_vehicles:  &emsp;<input type="number" name="no_of_vehicles" placeholder="Enter the no of vehicle" required></h3>
<button style="float:right; margin-right:20px;" type="submit" class="submit" required>submit</button>
</center>
        </form>
    </body>
</html>
