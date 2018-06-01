
<div class="container">
<?php foreach($song as $song) : ?>

<div class="songs">
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
</div>

<style>

.container{
    margin: auto;
    width: 100%;
    /* display: flex; */
    padding: 10px;
    flex-flow: row nowrap;
}
.songs{
    display:flex;
    padding: 5px;
    margin:20px;
    border: 1px solid black;
}
.info{
    /* padding: 10px; */
    
}
.name {
        /* text-align: center; */
    }

</style>