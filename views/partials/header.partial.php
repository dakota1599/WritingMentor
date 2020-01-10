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
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One&display=swap" rel="stylesheet">

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
        font-family: 'Text Me One', sans-serif;
    }
    </style>

</head>

<body>

    <!--
    <div class="w3-card-4 navBar bg-primary fg-tertiary transition" id="bar">
        <a class="btn bar-item w3-round-medium" href="home">Home</a>
        <a class="btn bar-item w3-round-medium" href="about">About</a>
    </div>
-->

    <button class="sandwhich button-Swing" style="border:none" onclick="toggle()">&#9776;</button>
    <div class="w3-sidebar bg-primary fg-tertiary w3-animate-left w3-hide" id="bar">
        <a class="w3-bar-item btn bar-item" style="text-align:center;margin-top: .5em;" onclick="toggle()">&times;</a>
        <hr>
        <a class="w3-bar-item btn bar-item" onclick="toggle()">Home</a>
    </div>