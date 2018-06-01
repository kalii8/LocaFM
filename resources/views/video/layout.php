
<div class="songs">
    <div class="info">
        <h2 class="name"><?= $song->name ?></h2>
        <div class="code"><iframe width="560" height="315" src="<?= $song->code ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
        <div class="author">
        <?= $song->author ?> <br>
        <a href="<?= $site_url ?>/public/?page=video&id=<?=$song->id?>">Play</a>
        </div>
    </div>
</div>



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