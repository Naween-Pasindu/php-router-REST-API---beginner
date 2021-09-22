<?php
include_once("./app/config/config.php");

$mysql = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,);
if(mysqli_connect_error()) {
	trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
}

$sql = "SELECT * FROM `vacancy` WHERE vacancyState = 'a' OR vacancyState = 'b' ORDER BY `vacancyId`";
$excute = $mysql->query($sql);
$results = $excute-> fetch_assoc();
$json = json_encode($results);
echo json_encode($results);