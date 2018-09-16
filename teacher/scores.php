<?php
    require("../connection.php");
    if(!isset($_SESSION['user_data'])) {
        header("Location:../index.php?message=no_credential");
    }
?>
<html lang = "en">
    <head>
        <?php require("frameworks.php"); ?>
    </head>
    <body>
        <!--Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<text class="navbar-brand"> <span class = "fa fa-user-alt"> </span> Teacher Portal </text>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li> <a href = "index.php"> <span class = "fa fa-user"> </span> Students </a> </li>
<li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
<li class = "active"> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="settings.php"><span class="fa fa-cogs"></span> Settings </a></li>
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
        <!-- End Navbar-->
    </body>
</html>