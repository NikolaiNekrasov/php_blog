
<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">My blog articles</h1>
        </div>
        <hr>
    </div>
</div>
<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <?php foreach($articles as $a): ?>
            <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title"><?=$a['title']?></h4>
                    <em>Published: <?=$a['date']?></em>
                    <p class="card-text"><?=articles_intro($a['content'])?></p>
                    
                    <a href="index.php?page=article&id=<?=$a['id']?>" class="btn btn-outline-secondary">Read more</a>
                </div>
            </div>
        </div>
         
        <?php endforeach ?>
    


</div>
</div>