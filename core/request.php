<?php 

//This class is for doing all the work of getting the uri in one place so I can just call
//back to it when I need the stuff.
class Request{
    
    //Get's me the URI without all the other stuff I don't need.
    public static function uri(){
        return trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH),'/');
    }

    //Get's met the request method that is being used.
    public static function RequestMethod(){
        return $_SERVER["REQUEST_METHOD"];
    }
}

?>