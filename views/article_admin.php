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
  <div class="container">
    <h1>My first blog</h1>
    <div class="">
      <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <div class="form-group">
        <label class="col-12">
         Name</label>
          <input type="text" name="title" value="<?php echo $_GET['action'] == 'add' ? '' : $article['title']?>" class="form-control" autofocus required>
        
        </div>
<div class="form-group">
        <label class="col-12">
          Data</label>
          <input type="date" name="date" value="<?php echo $_GET['action'] == 'add' ? '' : $article['date']?>" class="form-control" required>
        </div>
        <div class="form-group">
        <label class="col-12">
          Text</label>
          <textarea name="content" class="form-control" required><?php echo $_GET['action'] == 'add' ? '' : $article['content']?></textarea>
        </div>
        <input type="submit" value="Save" class="btn">
        
      </form>
    </div>
    <footer>
      <p>My first blog <br>Copyright &copy; 2018</p>
    </footer>
  </div>
</body>
</html>
