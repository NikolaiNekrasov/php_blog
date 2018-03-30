<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My first blog</title>
  <link rel="stylesheet" href="../style.css">
 

</head>
<body>
  <div class="container">
    <h1>My first blog</h1>
    <div class="">
      <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <label>
         Name
          <input type="text" name="title" value="<?php echo $_GET['action'] == 'add' ? '' : $article['title']?>" class="form-item" autofocus required>
        </label>
        <label>
          Data
          <input type="date" name="date" value="<?php echo $_GET['action'] == 'add' ? '' : $article['date']?>" class="form-item" required>
        </label>
        <label>
          Text
          <textarea name="content" class="form-item" required><?php echo $_GET['action'] == 'add' ? '' : $article['content']?></textarea>
        </label>
        <input type="submit" value="Сохранить" class="btn">
      </form>
    </div>
    <footer>
      <p>My first blog <br>Copyright &copy; 2018</p>
    </footer>
  </div>
</body>
</html>
