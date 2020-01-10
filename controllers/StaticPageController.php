<?php 

//This controller is for pages that really don't change too much.
class StaticPageController{

    //This directs to the home page.
    public function home(){
        $this->View("home");
    }
    //This directs to the about page.
    public function about(){
        $this->View("about");
    }
    //This directs to the 404 page.
    public function not_found(){
        $this->View("404");
    }
    //This directs to the services page.
    public function services(){
        $this->View("services");
    }


    //This is just so that I don't have to type .view.php over and over.  Cleans up the code a bit.
    protected function View($page){
        require "views/".$page.".view.php";
        
    }

    

}

?>