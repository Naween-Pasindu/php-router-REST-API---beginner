<?php
session_start();
define("baseUrl","/home/site/wwwroot");

if($_SERVER['REQUEST_METHOD'] === 'PUT' || $_SERVER['REQUEST_METHOD'] === 'DELETE' || $_SERVER['REQUEST_METHOD'] === 'POST'){
    require  "app/index.php";
}else{
    require  "public/index.php";
} 
//require  "app/index.php";