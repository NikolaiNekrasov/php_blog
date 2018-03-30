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
      <a href="admin">Admin Panel</a>
      <div class="">
        <?php foreach($articles as $a): ?>
        <div class="article">
          <h3>
            <a href="article.php?id=<?=$a['id']?>">
              <?=$a['title']?></a>
          </h3>
          <em>Published: <?=$a['date']?></em>
          <p><?=articles_intro($a['content'])?></p>
        </div>
      <?php endforeach ?>
      </div>
      <footer>
        <p>My first blog <br>Copyright &copy; 2018</p>
      </footer>
    </div>
  </body>
</html>
