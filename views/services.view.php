<?php 
//Browser tab title info
$title="Services";
//Direct to this pages css file
$css="services.css";
//Custom nav information
$nav="Tutoring Services";
//Custom Body Size for the Footer
$body="150%";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>

<div class="row-1">
    <h1 class="fg-primary gen-headers">Services Provided</h1>
</div>

<div class="row-2">
    <!--Tutoring Card-->
    <div class="bg-tertiary w3-card-4 service-card transition">
        <div class="service-header">
            <img class="service-icon" width="50" height="50" src="<?=$web?>core/resources/class.png" alt="Tutoring">
            <hr>
            <!--Card Title-->
            <h2 class="fg-primary bold">Tutoring</h2>
        </div>
        <!--Card Description-->
        <p>
        One to two hour sessions that focus on the student's needs, 
        creating a plan to reach the necessary goals, 
        and moving forward towards the goals.
        <br><br>
        Topics addressed include writing basics and grammar, 
        formatting (APA, MLA, or Chicago style), creating a 
        cohesive paper or assignment, formatting, thesis formulation, 
        and inspiration.
        </p>
        <!--Sign Up Button-->
        <div class="buttons">
            <a href="/service-tutoring" class="button-Shadow">Sign Up!</a>
        </div>
    </div>

    <!--Writing Counseling Card-->
    <div class="bg-tertiary w3-card-4 service-card transition">
        <div class="service-header">
            <img class="service-icon" width="50" height="50" src="<?=$web?>core/resources/pen.png" alt="Writing Counseling">
            <hr>
            <!--Card Title-->
            <h2 class="fg-primary bold">Writing Counseling</h2>
        </div>
        <!--Card Description-->
        <p>
        These are one-on-one counseling sessions for those 
        who want to pursue writing but are not sure of the steps.
        <br><br>
        These sessions are designed for the individual who wants 
        to improve their writing skills, but not pursue college classes. 
        To work independently and at their own pace.
        <br><br>
        There are no age or topic restrictions for this; I will help you
         move forward from wherever you are in your writing journey.
        </p>
        <!--Sign Up Button-->
        <div class="buttons">
            <a href="/service-counseling" class="button-Shadow">Sign Up!</a>
        </div>
    </div>

    <!--Editing/Proofreading Card-->
    <div class="bg-tertiary w3-card-4 service-card transition">
        <div class="service-header">
            <img class="service-icon" width="50" height="50" src="<?=$web?>core/resources/book.png" alt="Editing/Proofreading">
            <hr>
            <!--Card Title-->
            <h2 class="fg-primary bold">Editing/Proofreading</h2>
        </div>
        <!--Card Description-->
        <p>
        Having more than one set of eyes read over any type
         of writing is beneficial to the author. 
        <br><br>
        Whether it is a paper, essay, or article, I can be 
        your second set of eyes. I will address grammar, flow,
         thoroughness, mechanics, and formatting (APA, MLA, or Chicago Style).
        </p>
        <!--Sign Up Button-->
        <div class="buttons">
            <a href="/service-editing" class="button-Shadow">Sign Up!</a>
        </div>
    </div>

    <!--Speech Prep/Practice Card-->
    <div class="bg-tertiary w3-card-4 service-card transition">
        <div class="service-header">
            <img class="service-icon" width="50" height="50" src="<?=$web?>core/resources/mic.png" alt="Speech Prep/Practice">
            <hr>
            <!--Card Title-->
            <h2 class="fg-primary bold">Speech Prep/Practice</h2>
        </div>
        <!--Card Description-->
        <p>
        Do you have a speech or verbal presentation coming up? 
        Not a public speaker? Not sure where to start or what 
        to say? I can help. From choosing, narrowing down, and
         fully preparing and writing the speech to practicing 
         the presentation. I will offer suggestions on tightening
          up the subject matter all the way to how to clearly and
           effectively communicate your presentation.
        </p>
        <!--Sign Up Button-->
        <div class="buttons">
            <a href="/service-speech" class="button-Shadow">Sign Up!</a>
        </div>
    </div>

    <!--Writing Classes-->
    <div class="bg-tertiary w3-card-4 service-card transition">
        <div class="service-header">
            <img class="service-icon" width="50" height="50" src="<?=$web?>core/resources/bell.png" alt="Writing Classes">
            <hr>
            <!--Card Title-->
            <h2 class="fg-primary bold">Writing Classes</h2>
        </div>
        <!--Card Description-->
        <p>
        Are you wanting to write, but don't have the time to
         commit to a full class? Want something time and budget
          friendly? I am currently working on creating writing
           classes available to the public that vary in depth
            and breadth of topic as well as length. Are you 
            interested? Shoot me a message and put in a request!
        </p>
        <!--Sign Up Button-->
        <div class="buttons">
            <a href="/service-class" class="button-Shadow">Sign Up!</a>
        </div>
    </div>
</div>

<!--Required copyright tags for the assets used on this page.-->
<div style="margin:auto; text-align:center; font-size: 12px;">
    <a class="a" target="_blank" href="https://icons8.com/icons/set/classroom">Classroom</a>, 
    <a class="a" target="_blank" href="https://icons8.com/icons/set/bookmark-documents--v2">Bookmark Documents</a> 
    and other icons by <a class="a" target="_blank" href="https://icons8.com">Icons8</a>
</div>


<?php require 'views/partials/footer.partial.php';?>