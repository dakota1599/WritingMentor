<?php

//This bootstrap file is for gathering the initial required files into one place so that they can
//be used on the index page.

require "variables.php";
require "routes.php";
require "router.php";
require "request.php";

$router = new Router($routes);

?>