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
    <div class="container">
      <a href="index.php?action=add">Add</a>
      <table class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Date</th>
          <th>Caption</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
        <tbody>
        <?php foreach($articles as $a): ?>
          <tr>
            <td><?=$a['date']?></td>
            <td><?=$a['title']?></td>
            <td>
              <a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
            </td>
            <td>
              <a href="index.php?action=delete&id=<?=$a['id']?>">Delelte</a>
            </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
    <footer>
      <p>My first blog <br>Copyright &copy; 2018</p>
    </footer>
  </div>
</body>
</html>
