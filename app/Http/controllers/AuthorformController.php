<?php 

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Author;

class AuthorformController
{   
  public function index()
    {
        // setup everything we need for the project
      $site_url = SITE_URL;

      // set the content
      $content = 'authorform/layout.php';

    if (!isset($_GET['id'])) {
        // insert
        $author = new Author();
    } else {
        // edit
        $author = Author::find($_GET['id']);
    }
  
    var_dump($author);
    
    // here I can be sure that I have an object $product of class Product
    // that can be saved into the database
    
    // was the form submitted
    if ($_POST) {
    
        // update data with submitted data
        $author->name = $_POST['name'];
        $author->yob = $_POST['yob'];
        $author->bio = $_POST['bio'];
        $author->photo = $_POST['photo'];
        
        var_dump($author);
        
    
        // validate the data
        $there_were_errors = false;
        if ($author->name == '') {
            // "name cannot be empty"
            $there_were_errors = true;
        }
    
        // if validation did not encounter any errors
        if(!$there_were_errors) {
    
            // save
            $author->save();
    
            // redirect
            header('Location: '.SITE_URL.'/public/?page=authorform&id='. $author->id);
    
        }
    }
     // when we are ready with setup, include the wrapper
  include __DIR__ . '/../../../resources/views/wrapper.php'; 
}
 

}
