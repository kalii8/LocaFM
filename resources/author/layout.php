<?php foreach($author as $author) : ?>

<div class="songs">
     <div class="image">
        <img src="<?= $author['photo'] ?>" />
    </div>
    <div class="info">
        <h2 class="name"><?= $author['name'] ?></h2>
        <div class="yob"><?= $author['yob'] ?></div>
        <div class="yob"><?= $author['bio'] ?></div>
        <a href="<?= $site_url ?>/public/?page=form&id=<?=$author['id']?>">Edit</a>
        <a href="<?= $site_url ?>/public/?page=delete&id=<?=$author['id']?>">Delete</a>
        </div>
    </div>
</div>

<?php endforeach ?>