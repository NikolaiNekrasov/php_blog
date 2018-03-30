<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <h1>Мой первый блог</h1>
      <div class="">
        <div class="article">
          <h3>
              <?=$article['title']?>
          </h3>
          <em>Опубликовано: <?=$article['date']?></em>
          <p><?=$article['content']?></p>
        </div>
      </div>
      <footer>
        <p>Мой Первый Блог <br>Copyright &copy; 2018</p>
      </footer>
    </div>
  </body>
</html>
