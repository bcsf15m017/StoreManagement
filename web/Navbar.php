<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dollar Industries (Pvt.) Ltd</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
</head>
<body>

<div class="header">
    <ul>
        <li><img class="setimg" src="../img/headimg.png" alt="headimg" align="left" height="100px" width="100px"></li>
        <li align="center"><h1>Pakistan's no 1 Stationary</h1></li>
    </ul>
</div>
<div id="topnav">
    <ul>
        <li><img src="../img/logo.png" alt="logo" style="float:left"></li>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="career.php">Careers</a></li>
        <li><a href="#about">Products</a></li>
        <li><a href="about.php">About</a></li>
        <?php if (isset($_SESSION['user']))
            echo '<li><a style="float:right" href="logout.php">Log Out</a>';
        else
            echo '<li><a style="float:right" href="LogIn.php">Log in</a>' ?>

    </ul>
</div>
<br/>




