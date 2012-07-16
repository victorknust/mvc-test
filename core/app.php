<?php
require 'load.php';
require 'model.php';
require 'controller.php';
require 'router.php';

function class_autoloader($class) {
    // Array of folders to look in (ordered by preference)
    $folders = array(
        'application/controllers',
        'core'
    );
 
    foreach($folders as $folder) {
        if(file_exists($folder . '/' . $class . '.php')) {
            include_once $folder . '/' . $class . '.php';
            break;
        }   
    }
}

spl_autoload_register('class_autoloader');

$app   = new Controller();
$route = Router::route();

if ($route == '404')
{
    $app->show404();
}
