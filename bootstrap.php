<?php

namespace xxx {

        use xxx\Routers\Router;
        
        require __DIR__ . '/src/autoload.php';
        require __DIR__ . '/src/PasswordLib/passwordLib.php'; //For Password Hash
        
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set('Europe/Zurich');
        
        //Link URI anfordern
        $uri = $_SERVER['REQUEST_URI'];
        //Router Instanz erstellen
        $router = new Router;
        //Link Routen und Page ausgeben

        $router->route($uri)->run()->send();
}
