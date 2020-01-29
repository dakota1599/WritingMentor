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
    //This directs to the test page.
    public function testing(){
        $this->View("testing");
    }
    //This directs to the contact page.
    public function contact(){
        //If the request type is post, then it goes through the process of submitting the contact
        //request.
        if(Request::RequestMethod() == "POST"){
            
            $result = "";
            if($_POST['name'] == null || $_POST['last'] == null || $_POST['email'] == null || $_POST['info'] == null){
                $result = "<span style=\"color:red;\">All Fields Required.</span>";
            }else{
                
                if(isset($_POST['human'])) {
                     $localemail = "no-reply@writingsosmentor.com";
                     $adminemail = "";
                $name = $_POST['name'];
                $last = $_POST['last'];
                 $sender_address = "writing.sos.mentor@gmail.com";
                $contact = $_POST['email'];
                 $recipient_address = "writing.sos.mentor@gmail.com";
                 $message = $_POST['info'];
        
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
                 $email_subject = "Website Message From $name $last";
        
                 $email_body =
                 "Details:\r\n".
                 "Name: $name\r\n".
                 "Contact Info: $contact\r\n".
                 "Message:\r\n\n".
                 "$message\r\n\n\n".
                 "If you have received this email in error, please notify the sender immediately, ".
                 "then delete all relevant files from your system.";
        
                 // Set the email headers.
                 // Send from local email account.
                 $headers = "From: $name <$localemail>\r\n";
        
                 // CC the recipient.
                 $headers .= "CC: $contact";
        
                 // Close off the CC header field.
                 $headers .= "\r\n";
        
                 // Uncomment to debug. Or to spy, whatever.
                 // $headers .= "BCC: Admin <$adminemail>\r\n";
        
                 // Add the sender address to the Reply-To. Replying to the local account would suck...
                 $headers .= "Reply-to: $name <$contact>";
                 
                 $headers .= "\r\n";
                 
                 $headers .= "To: Dakota Shapiro <$recipient_address>";
                 
                 // Actually send the mail.
                 mail($to, $email_subject, $email_body, $headers);
                 $result = "<span style=\"color:green;\">Thanks for contacting me!<br>You should receive a copy of this message, and you will hear from me soon!</span>";
             }
            }else {
             // Human checkbox wasn't checked.
            $result = "<span style=\"color:red;\">Only Humans... Sorry.</span>";
         }
        }
        }
        
        $this->View_Contact('contact', $result);
    }


    //This is just so that I don't have to type .view.php over and over.  Cleans up the code a bit.
    protected function View($page){
        require "views/".$page.".view.php";
        
    }
    //Method overloading doesn't seem to exists in PHP, or at least the traditional method of 
    //overloading methods is not used.  To work around that I created another method for
    //the contact method up above.
    protected function View_Contact($page, $result){
        require "views/".$page.".view.php";
    }

    

}

?>