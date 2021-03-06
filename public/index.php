<?php

//bootstrapping
//include/require all necessary files

require_once '../config/app.php';
require_once '../vendor/kalii8/MVC/routing.php';
require_once '../vendor/kalii8/MVC/db.php';
require_once '../app/Song.php';
require_once '../app/Author.php';

//routing
//GET method
//http://www.eshop.test/ - handle by homepage controller
//http://www.eshop.test/?page=product - handle by product controller 
//http://www.eshop.test/?page=category - handle by category controller

$controller_name = \kalii8\mvc\routing\getControllerFromUrl();

$controller_class = ucfirst(strtolower($controller_name)) . 'Controller';

//require the right controller file

require '../app/Http/controllers/' . $controller_class . '.php';

//$controller_class = $controller_class;
$controller_class = '\\app\\Http\\controllers\\' . $controller_class;

//create controller object
$controller = new $controller_class();

//run the controller
$controller->index();
