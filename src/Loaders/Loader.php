<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.05.2016
 * Time: 22:10
 */

namespace xxx\Loaders
{
    use DOMDocument;

    class Loader
    {
        /**
         * @param string $path
         * @return DOMDocument
         * 
         */
        public function load($path)
        {
            $dom = new DOMDocument();
            $dom->loadXML(file_get_contents($path));
            return $dom;
        }
    }
}