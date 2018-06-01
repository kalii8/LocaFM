<?php 

namespace app\Http\controllers;

use \kalii8\MVC\db\db; //use CLASS NOT namespace

class IndexController
{
    public function index()
    {
    // ----------------------------------------------------------
    // 1. PREPARE ALL INFORMATION WE WILL NEED TO RENDER THE PAGE
    // (no echo or HTML including in this phase)
    // ----------------------------------------------------------

    define('IN_PRODUCTION', true);

    // setup everything we need for the project
    $site_url = SITE_URL;

    // set the content
    $content = 'form/layout.php';

    // ---------------------------------
    // 2. RENDER THE PAGE!
    // echoing and including HTML begins
    // ---------------------------------
    $connection = db::getConnection();

    $song = \app\Song::find(1);
    var_dump($song);

    // when we are ready with setup, include the wrapper
    include __DIR__ . '/../../../resources/views/wrapper.php';

    }
}
