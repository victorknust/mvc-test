<?php
require 'load.php';
require 'model.php';
require 'controller.php';
require 'router.php';

$app   = new Controller();
$route = Router::route();

if ($route == '404')
{
    $app->show404();
}


