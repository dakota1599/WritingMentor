<?php 

//The controller that delegates which payment view is to be displayed and manages
//payment.
class PaymentController{

    public function pay(){
        //If the request method is post, it will route to the payment view.
        if(Request::RequestMethod() == "POST"){
            $this->View("payment", $_POST['amt']);
        }
        //If the request method is get, it will route to the setpay view.
        else{
            $this->View("setpay", 0);
        }
    }

    //Gathers all necessary variables and distributes them accordingly.
    protected function View(string $view, float $amt){
        $string_num = number_format($amt, 2);
        require "views/".$view.".view.php";
    }
}

?>