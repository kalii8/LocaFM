<?php foreach($authors as $author) : 

?>


<div class="songs">
     <div class="image">
        <img src="<?= $author['photo'] ?>" />
    </div>
    <div class="info">
        <h2 class="name"><?= $author['name'] ?></h2>
        <div class="yob"><?= $author['yob'] ?></div>
        <div class="yob"><?= $author['bio'] ?></div>
        <a href="<?= $site_url ?>/public/?page=authorform&id=<?=$author['id']?>">Edit</a>
        <a href="<?= $site_url ?>/public/?page=authorlist&id=<?=$author['id']?>">Delete</a>
        </div>
    </div>
</div>

<?php endforeach ?>