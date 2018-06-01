<?php

namespace app\Http\controllers;

use \kalii8\MVC\db\db;
use app\Song;

class DeleteController
{
    public function index()
    {
        if (!isset($_GET['id'])) {
            echo 'Error';
        } else {
            $song = Song::find($_GET['id']);
        }

        $song->delete();
        header('Location: /LocaFM/public/?page=list&id='. $song->id);
    
        include __DIR__ . '/../../../resources/views/wrapper.php'; 
    }
    
}