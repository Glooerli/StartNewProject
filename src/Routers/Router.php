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
    use xxx\Controllers\FrontPageController;

    class Router
    {
        public function route($uri)
        {
            //Mitgegebene URI der Variable Path zuweisen.
            
            //Link Routing und jeweiligen Controller zurück geben
            switch ($uri) {
                case '/':
                    return new FrontPageController();
                default:
                    echo 'error';
            }
        }
    }
}