<?php 

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Song;

class UserController
{   
  public function index()
    {
        // setup everything we need for the project
      $site_url = SITE_URL;

      // set the content
      $content = 'user/layout.php';

    if (!isset($_GET['id'])) {
        // insert
        $song = new Song();
    } else {
        // edit
        $song = Song::find($_GET['id']);
    }

    $query = "
SELECT *
FROM `song`
";

$song = db::select($query);
  
    // var_dump($song);
    
    // here I can be sure that I have an object $product of class Product
    // that can be saved into the database
    
    // was the form submitted
    
     // when we are ready with setup, include the wrapper
  include __DIR__ . '/../../../resources/views/wrapper.php'; 
}
 

}
