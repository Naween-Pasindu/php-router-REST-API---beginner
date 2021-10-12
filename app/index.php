<?php
header("Content-Type: application/json; charset=UTF-8");
include_once("./app/libraries/vendor/autoload.php");
include_once("./app/config/config.php");

function loader($class)
{
    $filename = $class. '.php';
    $file ='./app/libraries/' . $filename;
    if (!file_exists($file))
    {
        $file ='./app/model/'. $filename;
        if (!file_exists($file)){
            return false;
        }
    }
    include $file;
}
spl_autoload_register('loader'); // set class auto loader

ini_set("log_errors", 1);
ini_set("error_log", "./app/error.log"); //create a error log file
$db = Database::getInstance();
$mysqli = $db->getConnection(); // set db connection
$_SESSION["token"] = "ABCD"; //only for demostration 
$core = new Core($mysqli);