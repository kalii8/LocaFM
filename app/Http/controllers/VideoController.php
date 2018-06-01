<?php

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Song;

class VideoController
{
    public function index()
    {
        // setup everything we need for the project
      $site_url = SITE_URL;

      // set the content
      $content = 'video/layout.php';

    if (!isset($_GET['id'])) {
        // insert
        $song = new Song();
    } else {
        // edit
        $song = Song::find($_GET['id']);
    }
    var_dump($song);
    
    include __DIR__ . '/../../../resources/views/wrapper.php'; 
}
}

