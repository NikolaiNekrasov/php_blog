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
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=articles">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</div>
</nav>

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




<!--- Footer -->
<footer>
    <div class="conteiner-fluid padding">
    <div class="row text-center padding">
       <div class="col-md-4">
           <img src="img/w3newbie.png">
           <hr class="light">
           <p>555-555-55</p>
           <p>email@email.com</p>
           <p>100 street Name</p>
           <p>City, State, 0000</p>
       </div>
       <div class="col-md-4">
           <hr class="light">
           <h5>Our hours</h5>
           <hr class="light">
           <p>Monday: 9am - 5 pm</p>
           <p>Monday: 9am - 5 pm</p>
           <p>Monday: 9am - 5 pm</p>
           <p>Monday: 9am - 5 pm</p>
       </div>
       <div class="col-md-4">
           <hr class="light">
           <h5>Service area</h5>
           <hr class="light">
           <p>City, State, 0000</p>
           <p>City, State, 0000</p>
           <p>City, State, 0000</p>
           <p>City, State, 0000</p>
       </div>
       <div class="col-12">
           <hr class="light-100">
           <h5>&copy; test.com</h5>
       </div>
    </div>
</div>
    
</footer>





  
 </body>
</html>