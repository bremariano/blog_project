<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Codar</title>
    <!-- Project styles -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar"
    </a>
    <nav>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categories</a></li>
            <li><a href="#" class="nav-link">About us</a></li>
            <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contact</a></li>
        </ul>
    </nav>
</header>
</body>