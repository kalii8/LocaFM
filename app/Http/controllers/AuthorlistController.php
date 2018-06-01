<?php 

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Author;

class AuthorlistController
{   
  public function index()
    {
        // setup everything we need for the project
      $site_url = SITE_URL;

      // set the content
      $content = 'authorlist/layout.php';

    if (!isset($_GET['id'])) {
        // insert
        $author = new Author();
    } else {
        // edit
        $author = Author::find($_GET['id']);
    }

    $query = "
SELECT *
FROM `author`
";

$authors = db::select($query);
  
    // var_dump($song);
    
    // here I can be sure that I have an object $product of class Product
    // that can be saved into the database
    
    // was the form submitted
    
     // when we are ready with setup, include the wrapper
  include __DIR__ . '/../../../resources/views/wrapper.php'; 
}
 

}
