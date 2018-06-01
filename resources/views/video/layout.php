
<div class="songs">
    <div class="info">
        <h2 class="name"><?= $song->name ?></h2>
        <div class="code"><iframe width="760" height="515" src="<?= $song->code ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
        <div class="author">
        <?= $song->author ?> <br>
        <a href="<?= $site_url ?>/public/?page=video&id=<?=$song->id?>">Play</a>
        </div>
    </div>
</div>



<style>
.songs{
    margin: auto;
    width: 50%;
    /* border: 3px solid green; */
    /* padding: 10px; */
}

}
.info{
    /* padding: 10px; */
}
.name {
        text-align: center;
    }

</style>