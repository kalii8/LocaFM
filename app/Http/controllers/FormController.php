<?php 

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Song;

class FormController
{   
  public function index()
    {
        // setup everything we need for the project
      $site_url = SITE_URL;

      // set the content
      $content = 'form/layout.php';

    if (!isset($_GET['id'])) {
        // insert
        $song = new Song();
    } else {
        // edit
        $song = Song::find($_GET['id']);
    }
  
    var_dump($song);
    
    // here I can be sure that I have an object $product of class Product
    // that can be saved into the database
    
    // was the form submitted
    if ($_POST) {
    
        // update data with submitted data
        $song->name = $_POST['name'];
        $song->code = $_POST['code'];
        $song->author = $_POST['author'];
        
        var_dump($song);
        
    
        // validate the data
        $there_were_errors = false;
        if ($song->name == '') {
            // "name cannot be empty"
            $there_were_errors = true;
        }
    
        // if validation did not encounter any errors
        if(!$there_were_errors) {
    
            // save
            $song->save();
    
            // redirect
            header('Location: /?page=form&id='. $song->id);
    
        }
    }
     // when we are ready with setup, include the wrapper
  include __DIR__ . '/../../../resources/views/wrapper.php'; 
}
 

}
