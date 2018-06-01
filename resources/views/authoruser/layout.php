<div class="container">
<?php foreach($authors as $author) : ?>

<div class="songs">
    <div class="info">
        <h2 class="name"><?= $author['name'] ?></h2>
        <div class="yob"><?= $author['yob'] ?></div>
        <div class="bio"><?= $author['bio'] ?> <br>
        <div class="photo"><?= $author['photo'] ?> <br>
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