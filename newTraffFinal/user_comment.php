<!Doctype html>
<?php                                             //Check for login Session
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
?>
<h1 style="color:white;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="new_logout.php" style="float:right">Logout</a><h1>
<html>
<head>
</head>
<body style="background-color:#d4bff9">
  <form action="comment.php" method="post">
    <h1>Thanks For Using our Service </h1>
    <h3>Please Enter The Valuble Review Here:</h3><br>
    <textarea name="comment" id="comment" placeholder="Enter your Feedback" style="width:350px;height:150px">
    </textarea>
    <button type="submit" value submit>Submit</button>
  </form>
</body>
</html>
