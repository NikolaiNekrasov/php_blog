<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
    
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
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/background.png">
            <div class="carousel-caption">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/background2.png">
        </div>
        <div class="carousel-item">
            <img src="img/background3.png">
        </div>
    </div>
</div>

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
  
 </body>
</html>