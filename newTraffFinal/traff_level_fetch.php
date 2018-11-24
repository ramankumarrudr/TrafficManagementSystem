<?php
$reg = "insert into traff_level(area,time,no_veh,traffic_level) values ('$area','$time','$no_veh','$traff_lvl')";
mysqli_query($con,$reg);
//header('location:traff_value.php');
?>
