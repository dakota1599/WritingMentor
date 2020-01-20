<?php 
//Browser tab title info
$title="Home";
//Direct to this pages css file
$css="home.css";
//Custom nav information
$nav="Writing Classes, Tutoring, and Proofreading";
//Custom Body Size for the Footer
$body="100%";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>

<!--This is the heading for the home page.-->
<div id="headerImage" class="transition">
    <div class="w3-round-large w3-card-4 center transition">
        <!--Company Name-->
        <h1 class="fg-tertiary titleText transition">Writing Mentor</h1>
        <p>
            <!--Quote/Motto-->
            <q class="fg-tertiary"
            style="font-family: 'Euphoria Script', cursive; font-weight:bold; font-size: 1.2em;">I'm the difference between<br>
            there, their, and they're.</q>
        </p>
    </div>
</div>

<!--This section exists so that the user can have a landing area to go and explore the rest of the website-->
<div class="row-1" data-aos="fade-up" data-aos-duration="1500">
    <h1 class="gen-headers fg-primary">Explore the Site</h1>
    <div class="links">
        <!--Direct to About Page-->
        <a href="/about" class="button-Shadow indv-link transition" title="About Me">About Me</a>
        <!--Direct to Services Page-->
        <a href="/services" class="button-Shadow indv-link transition" title="Tutoring Services">Tutoring Services</a>
        <!--Direct to Contact Page-->
        <a href="/contact" class="button-Shadow indv-link transition" title="Contact Me!">Contact Me</a>
    </div>
</div>



<?php 

require "views/partials/footer.partial.php";
?>