<?php 
//Browser tab title info
$title="Page Not Found";
//Direct to this pages css file
$css="404.css";
//Custom nav information
$nav="Missing Page!";
//Custom Body Size for the Footer
$body="100%";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>

<!--This is the 404 page set up.  Not a lot here, just a simple 404.-->
<div class="row-1">
    <!--This is the left section to display 404.-->
    <section class="left transition">
        <p class="fg-primary transition">404!</p>
    </section>
    <!--This is the right section to display 404 message/instruction.-->
    <section class="right transition">
        <p class="transition">The page you are looking for does not seem to exist. 
             If you feel that this page should exist, please feel free to 
            <a href="/contact" title="Contact us!" class="a transition">contact us</a> about it.  Otherwise, 
            <a href="/" title="Back Home" class="a transition">click here to go back to the home page.</a></p>
    </section>
</div>




<?php require 'views/partials/footer.partial.php';?>