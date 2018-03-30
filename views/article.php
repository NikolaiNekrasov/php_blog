<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My first blog</title>
    <link rel="stylesheet" href="style.css">
  

  </head>
  <body>
    <div class="container">
      <h1>My first blog</h1>
      <div class="">
        <div class="article">
          <h3>
              <?=$article['title']?>
          </h3>
          <em>Published: <?=$article['date']?></em>
          <p><?=$article['content']?></p>
        </div>
      </div>
      <footer>
        <p>My first blog <br>Copyright &copy; 2018</p>
      </footer>
    </div>
  </body>
</html>
