<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    
    <title>My blog</title>
</head>
<body>
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