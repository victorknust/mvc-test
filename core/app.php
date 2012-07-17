<?php
spl_autoload_register(function ($class) {
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
});

$app   = new Controller();
$route = Router::route();

if ($route == '404')
{
    $app->show404();
}
