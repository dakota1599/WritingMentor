<?php 

//The class controller for the service page.
class ServiceController{
    
    //Submits the correct information for the tutor form.
    public function tutor(){
        $this->View('Tutoring','');
    }

    //Submits the correct information for the counsel form.
    public function counsel(){
        $this->View('Counseling','');
    }

    //Submits the correct information for the edit form.
    public function edit(){
        $this->View('Editing/Proofreading','');
    }

    //Submits the correct information for the speech form.
    public function speech(){
        $this->View('Speech Prep','');
    }

    //Submits the correct information for the class form.
    public function class(){
        $this->View('Writing Class','');
    }

    //For when the form is submitted.
    public function submit(){
        if(Request::RequestMethod() == "POST"){
            if(hash_equals($_POST['token'], $_SESSION['token'])){
                $result = "";
            if($_POST['name'] == null || $_POST['email'] == null || $_POST['last'] == null){
                $result = "<span style=\"color:red;\">All Fields Required.</span>";
                $this->View($_POST['type'], $result);
            }else{
                
                if(isset($_POST['human'])) {
                     $localemail = "no-reply@writingsosmentor.com";
                     //$adminemail = "";
                $name = $_POST['name'];
                $last = $_POST['last'];
                 //$sender_address = "dakotashapirodev@gmail.com";
                $contact = $_POST['email'];
                 $recipient_address = "writing.sos.mentor@gmail.com";
                 $message = $_POST['info'];
                 $type = $_POST['type'];
        
             // Ensure both emails follow the right format (one or more alphanumeric,
             //     hyphen, or underscore, followed by '@' and then a domain name.
             if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $contact)) {
                 $errors .= "\r\n Error: Invalid sender address!";
                 $result = "<span style=\"color:red;\">Please Enter a valid email.</span>";
             }
        
             // If there were no errors, coninue to send the email.
             if (empty($errors)) {
                 // Blank to field for future obfuscation.
                 //     May add a checkbox for "anonymous" recipients list, which will put all recipients into BCC.
                 $to = "";
                 $email_subject = "$name signed up for $type!";
        
                 $email_body =
                 "Details:\r\n".
                 "Name: $name $last\r\n".
                 "Contact Info: $contact\r\n".
                 "Customer Info:\r\n\n".
                 "$message\r\n\n\n".
                 "If you have received this email in error, please notify the sender immediately, ".
                 "then delete all relevant files from your system.";
        
                 // Set the email headers.
                 // Send from local email account.
                 $headers = "From: $name <$localemail>\r\n";
        
        
                 // Add the sender address to the Reply-To. Replying to the local account would suck...
                 $headers .= "Reply-to: $name <$contact>";
                 
                 $headers .= "\r\n";
                 
                 $headers .= "To: Kaitlin <$recipient_address>";
                 
                 // Actually send the mail.
                 mail($to, $email_subject, $email_body, $headers);

                 //Sending the receipt to the customer
                
                 $headers = "From: $name <$localemail>\r\n";
        
                 // No reply on this for the receipt.
                 $headers .= "Reply-to: no-reply <$localemail>";
                 
                 $headers .= "\r\n";
                 
                 $headers .= "To: $name <$contact>";
                 //Send receipt.
                 mail($to, "$type sign up receipt for $name", $email_body, $headers);
                 require "views/thankyou.view.php";
             }
            }else {
             // Human checkbox wasn't checked.
            $result = "<span style=\"color:red;\">Only Humans... Sorry.</span>";
            $this->View($_POST['type'], $result);
         }
        }
    }
        }else{
            //Back to the services page if not going using post request.
            require "views/services.view.php";
        }
    }




    //This version of View will accept a variable that will change the look of the form
    //in the service.view.php file.
    protected function View($type, $result){
        require "views/signup.view.php";
    }
}

?>