<form action="" method="POST">
   Name<input type="text" id="name" name="name" value="<?= $song->name; ?>">  <br />
   Code<input type="text" id="code" name="code" value="<?= $song->code; ?>">  <br />
   Author<input type="text" id="author" name="author" value="<?= $song->author; ?>">  <br />
    <input type="submit" value="Save/Update">

</form>