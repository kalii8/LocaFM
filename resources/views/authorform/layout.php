<div class="contain">
<form action="" method="POST">
   Author Name<input type="text" id="name" name="name" value="<?= $author->name; ?>">  <br />
   Year of Birth<input type="text" id="yob" name="yob" value="<?= $author->yob; ?>">  <br />
   Biography<input type="text" id="bio" name="bio" value="<?= $author->bio; ?>">  <br />
   Photo<input type="text" id="photo" name="photo" value="<?= $author->photo; ?>">  <br />
    <input type="submit" value="Save/Update">

</form>
</div>
<style>
.contain{
    margin: auto;
    width: 20%;
}
</style>