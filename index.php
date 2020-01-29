<?php 

session_start();

//Redirects all http requests to https
if(!isset($_SERVER['HTTPS'])){
    header('Location:https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],true,301);
}


//Requiring the bootstrap file.
require "core/bootstrap.php";

//Begins the directing process.
$router->Direct(Request::uri());
?>