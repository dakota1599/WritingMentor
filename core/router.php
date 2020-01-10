<?php 
//This will require all the controller files I will need.
require 'controllers/StaticPageController.php';

//Router class for routing user requests to the right method in the right controller.
class Router{
    private $routes = [];

    public function __construct(array $routes){
        $this->Define($routes);
    }

    //Takes in an array of routes to assign them to the routes backing field.
    public function Define(array $routes){
        $this->routes = $routes;
    }

    //Directs the request.
    public function Direct($uri){
        
        //Checks to see if the key exists.
        if(array_key_exists(strtolower($uri), $this->routes)){
            //Add a way to check the slashes for stuff for doing articles later.
            return $this->toAction(...explode("@",$this->routes[$uri]));
        }else{
            return $this->toAction("StaticPageController","not_found");
        }
    }

    //This method goes ahead and generates a new variable with the correct controller class and uses
    //the correct controller method.
    protected function toAction($class, $method){
        $class = new $class();
        $class->$method();
    }


}


?>