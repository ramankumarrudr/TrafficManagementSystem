<?php

$connect = new PDO("mysql:host=127.0.0.1;dbname=traffic_system", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM diversions
 WHERE area IN (".$search_text.")
 ORDER BY id DESC
 ";
}
else
{
 $query = "SELECT * FROM diversions ORDER BY id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["street-1"].'</td>
   <td>'.$row["road_length_1"].'</td>
   <td>'.$row["street2"].'</td>
   <td>'.$row["road_length_2"].'</td>
   <td>'.$row["street-3"].'</td>
   <td>'.$row["road_length_3"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>
