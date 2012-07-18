<?php
namespace core;

spl_autoload_extensions(".php");
spl_autoload_register();

$app   = new namespace\Controller();
$route = Router::route();

if ($route == '404')
{
    $app->show404();
}
