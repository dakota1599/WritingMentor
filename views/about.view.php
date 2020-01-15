<?php 
//Browser tab title info
$title="About";
//Direct to this pages css file
$css="about.css";
//Custom nav information
$nav="About Your Tutor";
//Custom Body Size for the Footer
$body="120%";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>
<!--About page-->

<!--Header image is the picture that is behind the about sheet.-->
<div id="headerImage" class="transition">
    <div class="row-1" data-aos="fade-up" data-aos-duration="1100">
    <!--Kaitlin's photo-->
    <img height="200" width="200" class="profile w3-card-2 transition" alt="Prof. Kailtin" src="<?=$web?>core/resources/kait.jpg">
        <section class="sheet w3-card-4 transition bg-tertiary">
            <!--Title-->
            <h1 class="fg-primary transition">Kailtin</h1>
            <!--About Paragraphs-->
            <p class="transition"> <span class="tab">This</span> service was born out of a need for inspiration, motivation, and accountability. Not just for myself,
                but for the community around me. There are many stories that want and need to be shared and I want to do
                my part in helping them get written.
                <br>
                <span class="tab">I</span> have a master’s degree in communication with a focus on professional writing. I worked as an adjunct
                professor teaching college writing for a local university. When time allows, I share my musings about
                life on my blog (tatertotsanddonuts.wordpress.com). I work part time as a personal trainer at Zoo City
                Fitness and Personal Training.
                <br>
                <span class="tab">I</span> currently offer tutoring services to students of all ages as well as student athletes. I also edit and
                proofread any and all types of writing. I can also help you get your story from your head and heart to
                the paper. Whether you need motivation, inspiration, or the grammar and mechanics of it.
            </p>
        </section>
    </div>
</div>




<?php require 'views/partials/footer.partial.php'; ?>