<?php 
require "core/variables.php";
?>


<!doctype html>
<html lang="en-us">

<head>
    <title><?= $title ?> | Writing Mentor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Access to the W3schools css library-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Access to the simple grid css-->
    <link type="text/css" rel="stylesheet" href="<?= $web ?>core/css/grid/simple-grid.css">
    <!--Access to view's individual css files-->
    <link type="text/css" rel="stylesheet" href="<?= $web ?>core/css/<?= $css ?>">
    <!--Access to the main project css file-->
    <link type="text/css" rel="stylesheet" href="<?= $web ?>core/css/main.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Pacifico|Permanent+Marker|Euphoria+Script&display=swap" rel="stylesheet">

    <script src="<?= $web ?>core/js/main.js">
    </script>
    <style>
    *,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Bebas Neue', cursive;
    }
    .wrapper{
        min-height:<?=$body?>;
    }
    </style>

    <!--AOS Stuff-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

</head>

<body>

<!--This is a wrapper so that the footer can stick to the bottom of the page and not be fixed.-->
<div class="wrapper">
    <!--Navigation sandwhich w/ wrapper.-->
    <div id="navBackground" class="navBar transition">
        <button class="sandwhich button-Swing" id="sand" style="border:none" onclick="toggle()">&#9776;</button>
        <h2 id="navText" class="fg-primary"><?= $nav;?></h2>
    </div>
    <!--Actual navigation menu.-->
    <div class="w3-sidebar bg-primary fg-tertiary w3-animate-left w3-card-4 w3-hide" id="bar" style="top:0;">
        <a class="w3-bar-item btn bar-item" style="text-align:center;margin-top: .5em;" onclick="toggle()">&times;</a>
        <hr>
        <a href="/home" class="w3-bar-item btn bar-item" onclick="toggle()">Home</a>
        <a href="/about" class="w3-bar-item btn bar-item" onclick="toggle()">About</a>
        <a href="/services" class="w3-bar-item btn bar-item" onclick="toggle()">Services</a>
        <a href="/contact" class="w3-bar-item btn bar-item" onclick="toggle()">Contact</a>
    </div>