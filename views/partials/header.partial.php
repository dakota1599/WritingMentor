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
    <link type="text/css" rel="stylesheet" href="<?= $web ?>core/css<?= $css ?>">
    <!--Access to the main project css file-->
    <link type="text/css" rel="stylesheet" href="<?= $web ?>core/css/main.css">
</head>

<body>