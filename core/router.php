<?php
class Router
{       
    public static function route()
    {
        $segments   = explode("/", $_SERVER['REQUEST_URI']);
        unset($segments[0]);

        if ($segments[1] == 'index.php' || ! $segments[1])
        {
            $controller->defaultHome();
        } 
        else
        {
            $controller = ucfirst($segments[1]).'Controller';
            unset($segments[1]);
            if (array($segments))
            {
                $method = $segments[2];
                unset($segments[2]);
            }

            $params = array();

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
