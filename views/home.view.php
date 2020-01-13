<?php 
//Browser tab title info
$title="Home";
//Direct to this pages css file
$css="home.css";
//Custom nav information
$nav="Writing Classes, Tutoring, and Proofreading";

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
            <q class="fg-tertiary" style="font-family: 'Permanent Marker', cursive;">We're the difference between<br>
            there, their, and they're.</q>
        </p>
    </div>
</div>

<!--This section exists so that the user can have a landing area to go and explore the rest of the website-->
<div class="row-1" data-aos="fade-up" data-aos-duration="1500">
    <h1 class="gen-headers fg-primary">Explore Our Site!</h1>
    <div class="links">
        <!--Direct to About Page-->
        <a href="about" class="button-Shadow indv-link transition" title="About Us">About Us</a>
        <!--Direct to Services Page-->
        <a href="services" class="button-Shadow indv-link transition" title="Our Services"> Our Services</a>
        <!--Direct to Contact Page-->
        <a href="contact" class="button-Shadow indv-link transition" title="Contact Us!">Contact Us!</a>
    </div>
</div>



<?php 

require "views/partials/footer.partial.php";
?>