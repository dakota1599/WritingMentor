<?php 
session_start();

//Requiring the bootstrap file.
require "core/bootstrap.php";

//Begins the directing process.
$router->Direct(Request::uri());
?>