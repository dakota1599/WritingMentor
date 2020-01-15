<?php 

//The class controller for the service page.
class ServiceController{
    
    //Submits the correct information for the tutor form.
    public function tutor(){
        $this->View('','');
    }

    //Submits the correct information for the counsel form.
    public function counsel(){
        $this->View('','');
    }

    //Submits the correct information for the edit form.
    public function edit(){
        $this->View('','');
    }

    //Submits the correct information for the speech form.
    public function speech(){
        $this->View('','');
    }

    //Submits the correct information for the class form.
    public function class(){
        $this->View('','');
    }



    //This version of View will accept a variable that will change the look of the form
    //in the service.view.php file.
    protected function View($type, $extras){
        require "views/serivce.view.php";
    }
}

?>