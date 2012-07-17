<?php
/**
 * Basic routing class for MVC test 
 * @package MVC-test
 * @subpackage core
 * @author Ryan Marshall <ryan@irealms.co.uk>
 */
class Router
{       
    public static function route()
    {
        $segments = explode("/", $_SERVER['REQUEST_URI']);
        $segments = new ArrayObject($segments);
        $segments->offsetUnset(0);

        if ($segments->offsetGet(1) == 'index.php' || ! $segments->offsetExists(1))
        {
            $controller = new Controller();
            $controller->defaultHome();
        } 
        else
        {
            $controller = ucfirst($segments->offsetGet(1)).'Controller';
            $segments->offsetUnset(1);
            
            if ($segments->offsetExists(2))
            {
                $method = $segments->offsetGet(2);
                $segments->offsetUnset(2);
            }
            else
            {
                $method = 'index';
            }

            $params = (array) $segments;

            if (file_exists('application/controllers/'.$controller.'.php'))
            {
                $controller = new $controller();
                if (method_exists($controller, $method))
                {
                    return call_user_func_array(array($controller, $method), $params);
                }
            }
            else
            {
                return '404';
            }
        }
    }
}
