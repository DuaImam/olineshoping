<?php



$con = mysqli_connect("localhost","root","","proj") or die("Connection Failed");


$result = mysqli_query($con,"SELECT * distinct(city) FROM `country`"); 



?>
