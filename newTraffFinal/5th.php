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
<!--<IMG STYLE="position:absolute;top:150px; left:10px; width:450px; height:300px" SRC="images/ve.jpg">  image commented -->
         <style>
            body{
             background-image: url("images/au.jpg");
           background-size: 100%;
background-position: full;
background-repeat: repeat;
            }
            </style>
            <h1 style="color:black;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="user_comment.php" style="float:right">Logout</a><h1>
        <title>traffic management</title>
    </head>
    <body bgcolor="#E6E6FA"
<centre>
         <h1 align="center"><font  color="black" face="ink free" size="8">TRAFFIC MANAGEMENT SYSTEM</font></h1>
        <form action="veh_details.php" method="POST">

            <h2 align="center">VEHICLES</h2>

<h3 align="center">vehicle_type:<select name="vehicle_type">
        <option value="unselected" disabled selected>Select the VehicleType<option>
        <option value="2 wheeler">2 Wheeler</option>
        <option value="3 wheeler">3 wheeler</option>
        <option value="4 wheeler">4 wheeler</option>
        <option value="6 wheeler">6 wheeler</option>
        <option value="8 wheeler">8 wheeler</option>
        <option value="12 wheeler">12 wheeler</option>
    </select></h3>
<h3 align="center">vehicle_name:<input type="text" name="vehicle_name" placeholder="Enter Vehicle Nam"></h3>

<button  style="float:left; margin-left:600px;" type="submit" value="submit" name="submit"  />Submit</button>
</centre>
        </form>
    </body>
</html>
