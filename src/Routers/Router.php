<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.05.2016
 * Time: 19:50
 */

namespace xxx\Routers
{
    //Link Router
    class Router
    {
        public function route($uri)
        {
            //Mitgegebene URI der Variable Path zuweisen.
            $path = $uri;
            
            //Link Routing und jeweiligen Controller zurück geben
            switch ($path) {
                case '/':
                    return new Controller;
                default:
                    echo 'error';
            }
        }
    }
}