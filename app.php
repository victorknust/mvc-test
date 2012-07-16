<?php
require 'load.php';
require 'model.php';
require 'controller.php';
require 'router.php';

function class_autoloader ($class) {
    // Array of folders to look in (ordered by preference)
    $paths = array(
        '/Application/Controllers/',
        '/'
    );

    foreach ($paths AS $path)
    {
        echo $path.'-'.$class.'<br />';
        $path = $path.str_replace('\\', '/', $class).'.php';  
        if(file_exists($path)) {
            require $path;
        }
    }
    
    /*foreach($folders as $folder) {
        if(file_exists($folder . '/' . $class . '.php')) {
            include_once $folder . '/' . $class . '.php';
            break;
        }   
    }*/
}

spl_autoload_register('class_autoloader');

$app   = new \Controller();
$route = Router::route();

if ($route == '404')
{
    $app->show404();
}


