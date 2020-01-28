<?php 
//Browser tab title info
$title="Thank you!";
//Direct to this pages css file
$css="thankyou.css";
//Custom nav information
$nav="Sign Up Complete";
//Custom Body Size for the Footer
$body="77.8vh";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>

<div class="row-1">
    <!--Big Thank You Banner-->
    <h1 class="fg-primary gen-headers thank transition">Thank You!</h1>
    <!--Thank you/instructional message.-->
    <p class="body transition">
        You have been signed up for <?=$type?> and will receive an email receipt. I will be in contact
        via the email you provided soon!
        <hr class="divider transition">
    </p>
    <!--Links back to the services and home page.-->
    <p class="body transition">
        <a class="a transition" href="/services" title="Services">Sign up</a> for something else,
        <br>
        or go back to the <a class="a transition" href="/" title="Home">Home</a> page.
    </p>
</div>


<?php require "views/partials/footer.partial.php";?>