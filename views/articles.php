
<h1>My first blog</h1>
<a href="admin">Admin Panel</a>
<div >
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
