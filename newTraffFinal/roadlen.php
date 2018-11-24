<?php                                             //Check for login Session
session_start();
if(!isset($_SESSION['username'])){
  header('location:trafficUserLogin.php');
}
?>
<?php
//index.php
$connect = new PDO("mysql:host=127.0.0.1;dbname=traffic_system", "root", "");

$query = "SELECT DISTINCT area FROM diversions ORDER BY area ASC";

$statement = $connect->prepare($query); //query for execution

$statement->execute(); // execute select query

$result = $statement->fetchAll(); //to fetch query exe result

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

  <link href="css/bootstrap-select.min.css" rel="stylesheet" />
  <script src="js/bootstrap-select.min.js"></script>
  <style>
    body{
     background-image: url("images/trr.jpg");
     background-size: 100%;
     background-position: full;
     background-repeat: repeat;
    }
    </style>
 </head>
 <body>
   <h1 style="color:white;float:center">Welcome <?php echo $_SESSION["username"]; ?><a href="user_comment.php" style="float:right">Logout</a><h1><!-- logout and delete session -->
  <div class="container">
   <br />
   <h2 align="center" style="color:#EC80FF">Search Main-Road Length by Area</h2><br />

   <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
     <option value="" disabled selected>Select The Area of the Police -</option>
   <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["area"].'">'.$row["area"].'</option>';
   }
   ?>
   </select>
   <input type="hidden" name="hidden_area" id="hidden_area" />
   <div style="clear:both"></div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr style="background-color:#80C6FF">
       <th>Street 1</th>
       <th>Road Length</th>
       <th>Street 2</th>
       <th>Road Length</th>
       <th>Street 3</th>
       <th>Road Length</th>
      </tr>
     </thead>
     <tbody style="background-color:#EC80FF">
     </tbody>
   </table>
   </div>
   <br />
   <br />
   <br />
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 //load_data(); //hide initial table

 function load_data(query='')
 {
  $.ajax({
   url:"fetch2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }

 $('#multi_search_filter').change(function(){
  $('#hidden_area').val($('#multi_search_filter').val());
  var query = $('#hidden_area').val();
  load_data(query);
 });

});
</script>
