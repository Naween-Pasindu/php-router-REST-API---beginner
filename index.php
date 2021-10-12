<?php
session_start();
<<<<<<< HEAD
define("baseUrl","sahanadara");
=======
define("baseUrl","Sahanadara");

>>>>>>> a80c26691fa0e40a06a20ea8969b1146af61a4b2
if($_SERVER['REQUEST_METHOD'] === 'PUT' || $_SERVER['REQUEST_METHOD'] === 'DELETE' || $_SERVER['REQUEST_METHOD'] === 'POST'){
    require  "app/index.php";
}else{
    require  "public/index.php";
<<<<<<< HEAD
} 
=======
} 
>>>>>>> a80c26691fa0e40a06a20ea8969b1146af61a4b2
