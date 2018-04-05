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
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">TxtTxtTxtTxt  TxtTxtTxtTxtTxt TxtTxtTxtTxt  TxtTxtTxtTxt TxtTxtTxtTxt TxtTxtTxtTxt  TxtTxtTxtTxtTxt TxtTxtTxtTxt  TxtTxtTxtTxt TxtTxtTxtTxt</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web hosting</button></a>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Built with ease.</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Welcome to my Bootstrap 4 website turtorial! Bootstrap is a free and opensource front-end</p>
        </div>
    </div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-code"></i>
            <h3>HTML5</h3>
            <p>Built with the latest version of HTML, HTML5</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap, Bootstrap 4</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <i class="fab fa-css3"></i>
            <h3>CSS3</h3>
            <p>Built with the latest version of CSS, CSS3</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you bilt it...</h2>
            <p>Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. </p>
               <p>Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.</p> 
               <p> Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы. Здесь будет текст для главной страницы.</p>
               <br>
               <a href="#" class="btn btn-primary">Leran More</a>
        </div>
        <div class="col-lg-6">
            <img src="img/desk.png" class="img-fluid">
        </div>
    </div>
</div>

<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed"></div>
    </div>
</figure>


<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
 <div id="emoji" class="collapse">
     <div class="container-fluid padding">
         <div class="row text-center">
             <div class="col-sm-6 col-md-3">
                 <img class="gif" src="img/gif/panda.gif">
             </div>
              <div class="col-sm-6 col-md-3">
                 <img class="gif" src="img/gif/poo.gif">
             </div>
              <div class="col-sm-6 col-md-3">
                 <img class="gif" src="img/gif/unicorn.gif">
             </div>
              <div class="col-sm-6 col-md-3">
                 <img class="gif" src="img/gif/chicken.gif">
             </div>
         </div>
     </div>
 </div> 
<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Meat the team</h1>
        </div>
        <hr>
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Fohn is an Internet entrepreneur with almost 20 years of experiens</p>
                    <a href="#" class="btn btn-outline-secondary">See Progile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">Mary Jo</h4>
                    <p class="card-text">Mary is an Internet entrepreneur with almost 10 years of experiens</p>
                    <a href="#" class="btn btn-outline-secondary">See Progile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is an Internet entrepreneur with almost 2 years of experiens</p>
                    <a href="#" class="btn btn-outline-secondary">See Progile</a>
                </div>
            </div>
        </div>
</div>
</div>

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