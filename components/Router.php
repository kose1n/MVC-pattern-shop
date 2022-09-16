<?php

class Router
{
    private $routes;
    public function __construct()
    {
        $routesWays = ROOT . '/config/routes.php';
        $this->routes = include($routesWays);
    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // qr string
        $uri = $this->getURI();
        foreach ($this->routes as $URIPattern => $way)
        {
            // comparison $uriPattern и $uri
            if (preg_match("~$URIPattern~", $uri))
            {
                // Get path and get route
                $internalRoute = preg_replace("~$URIPattern~", $way, $uri);
                /*print_r($Route);*/
                $sector = explode('/', $internalRoute);
                $contrName =  'Ctrll' . array_shift($sector);
                $contrName = ucfirst($contrName);
                $actionName = 'action' . ucfirst(array_shift($sector));
                #####NADO - Ctrllcart#actionInsert
                $parameters = $sector;
                $contrFile = ROOT . '/controllers/' . $contrName . '.php';

                if (file_exists($contrFile))
                {
                    include_once($contrFile);
                }
                $contrObject = new $contrName;
                $result = call_user_func_array(array($contrObject, $actionName), $parameters);
                if ($result != null)
                {
                    break;
                }
            }
        }
    }
}
