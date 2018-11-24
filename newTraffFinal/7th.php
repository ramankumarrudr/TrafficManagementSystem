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
<IMG STYLE="position:absolute;top:150px; right:10px; width:450px; height:300px" SRC="images/div.jpg">
         <style>
            body{
             background-image: url("images/red.jpg");
           background-size: 100%;
background-position: full;
background-repeat: repeat;
            }
            </style>
        <title>traffic management</title>
        <h1 style="color:black;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="user_comment.php" style="float:right">Logout</a><h1>
    </head>
    <body bgcolor="#E6E6FA"
<center>
         <h1><font  color="black" face="ink free"size="8">TRAFFIC MANAGEMENT SYSTEM</font></h1>
        <form action="1st.php" method="POST">
            <h2>&emsp;&emsp;&emsp;&emsp;DIVERSIONS</h2>


<h3>&emsp; &emsp; &emsp; &emsp; Area:     <input type="text" name="Area" ></h3>
<h3> &emsp; &emsp; &emsp; &emsp;   div-roadno:               <input type="text" name="div-roadno" ></h3>
<h3> &emsp; &emsp; &emsp; &emsp;div-direction:<input type="text" name="div-direction" ></h3>


             <input style="float:left; margin-left:100px;" type="submit" value="submit" name="submit" />
</center>
        </form>
    </body>
</html>
