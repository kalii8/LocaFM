<?php foreach($song as $song) : ?>

<div class="songs">
    <!-- <div class="image">
        <img src="<?= $song['image_url'] ?>" />
    </div> -->
    <div class="info">
        <h2 class="name"><?= $song['name'] ?></h2>
        <div class="code"><?= $song['code'] ?></div>
        <div class="author">
        <?= $song['author'] ?> <br>
        <a href="<?= $site_url ?>/public/?page=video&id=<?=$song['id']?>">Play</a>
        </div>
    </div>
</div>

<?php endforeach ?>

<style>
.songs{
    display:flex;
    padding: 5px;
}
.info{
    padding: 10px;
}
.name {
        text-align: center;
    }

</style>