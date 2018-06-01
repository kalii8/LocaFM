<?php 

namespace kalii8\MVC\routing;

/**
 * Look at URL, return name of controller
 */

function getControllerFromUrl()
{
    // look for the parameter page in the URL address
    if (isset($_GET['page'])){
    //if it finds it, it will return it's value
        return $_GET['page'];
    } 
    //if it does not find it, it will return the string 'index'
    return 'index';
}
