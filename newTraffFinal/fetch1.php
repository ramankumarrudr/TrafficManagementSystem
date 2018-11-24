<?php

$connect = new PDO("mysql:host=127.0.0.1;dbname=traffic_system", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM traff_police
 WHERE area IN (".$search_text.")
 ORDER BY id DESC
 ";
}
else
{
 $query = "SELECT * FROM traff_police ORDER BY id DESC";
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
   <td>'.$row["police_id"].'</td>
   <td>'.$row["police_name"].'</td>
   <td>'.$row["area"].'</td>
   <td>'.$row["phone_no"].'</td>
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
