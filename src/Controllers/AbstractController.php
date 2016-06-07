<?php

/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.05.2016
 * Time: 21:50
 */

namespace xxx\Controllers
{

    use xxx\Loaders\Loader;
    use xxx\Renderers\FrontPageRenderer;
    use xxx\Responses\Response;

    abstract class AbstractController
    {
        /**
         * @var Loader
         *
         */
        private $loader;
        
        public function run()
        {
            return new Response($this->getBody());
        }

        //Macht eine Instanz des Loaders
        protected function getLoader()
        {
            if ($this->loader === null){
                $this->loader = new Loader;
            }

            return $this->loader;
        }

        //Laded das HTML Template
        protected function loadTemplate()
        {
            return $this->loadDom('/var/www/c2b/data/Pages/PageTemplate.html');
        }
          
        //Ladet HTML Files
        protected function loadDom($path)
        {
            return $this->getLoader()->load($path);
        }

        abstract protected function getBody();
    }
}