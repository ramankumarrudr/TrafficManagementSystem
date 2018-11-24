<!DOCTYPE html>
<?php                                             //Check for login Session
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
?>

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<IMG STYLE="position:absolute;top:150px; left:10px; width:450px; height:300px" SRC="images/tp.jpg">
<IMG STYLE="position:absolute;top:150px; right:10px; width:450px; height:300px" SRC="images/p1.jpg">
          <style>
            body{
             background-image: url("images/trr.jpg");
             background-size: 100%;
             background-position: full;
             background-repeat: repeat;
            }
            </style>
        <title>traffic management</title>
    </head>
    <body bgcolor="#E6E6FA">

        <center>
          <h1 style="color:white;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="user_comment.php" style="float:right">Logout</a><h1>
            <!-- logout and delete session -->
        <h1><font  color="white" face="ink free"size="8">TRAFFIC MANAGEMENT SYSTEM</font></h1>
       <form action="traff_search_1st.php" method="POST">
           <p> <br></br>
               <input type="submit" value="TRAFFIC POLICE" name="TRAFFIC POLICE" /></p>
       </form>
        <form action="roadlen.php" method="POST">
            <p><br></br>
                <input type="submit" value="ROUTES" name="ROUTES" /></p>
</form>
<form action="5th.php" method="POST">
<p><br></br>
                <input type="submit" value="VEHICLE TYPE" name="VEHICLE TYPE" /></p>
</form>
<form action="6th.php" method="POST">
<p><br></br>
                <input type="submit" value="TRAFFIC" name="TRAFFIC" /></p>
</form>
               <form action="diversions.php" method="POST">
           <p> <br></br>
               <input type="submit" value="DIVERSION" name="DIVERSION" /></p>
       </form>
</html>
