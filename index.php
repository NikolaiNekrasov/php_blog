<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>             
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
        </ul>
    </div>
</div>
</nav>



<!--- Image Slider -->


<!--- Jumbotron -->


<!--- Welcome Section -->


<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->


<!--- Emoji Section -->

  
<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">My blog</div>
        <div id="navWrap">
            <a href="/">
                Main
            </a>
            <a href="index.php?page=articles">
                Blog
            </a>
        </div>
    </div>
</header>
<div id="content">
<?php

require_once("database.php");
require_once("models/articles.php");
$link = db_connect();
$articles = articles_all($link);
$page = $_GET['page'];
     if (!isset($page)) {
        require('views/main.php');
     } elseif ($page == 'articles') 
     {
        require('views/articles.php');
     } elseif ($page == 'article') {
       $id = $_GET['id'];
       $article = [];
         foreach ($articles as $a) {
           if ($a['id'] == $id) {
                $article = $a;
                break;
           }
       }
         require('views/article.php');
      
      
     }

/* require_once("database.php");
  require_once("models/articles.php");

  $link = db_connect();
  $articles = articles_all($link);

  include("views/articles.php"); */
?>
</div>
<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
               
                nikolai.nekrasov@gmail.com
            </div>
            <div class="contactWrap">
               
                +7-926-521-75-80
            </div>


        <div id="footerNav">
            <a href="/">Blog</a>
            <a href="index.php?page=shop">Admin Panel</a>
        </div>

        <div id="social">
            
        </div>

        <div id="copyrights">&copy; My Blog</div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>   
 </body>
</html>