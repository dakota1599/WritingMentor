<?php 

class PaymentController{

    public function pay(){
        if(Request::RequestMethod() == "POST"){
            $this->View("payment", $_POST['amt']);
        }else{
            $this->View("setpay", 0);
        }
    }


    protected function View(string $view, float $amt){
        require "views/".$view.".view.php";
    }
}

?>