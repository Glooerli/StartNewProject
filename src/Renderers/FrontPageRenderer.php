<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 20.05.2016
 * Time: 23:41
 */

namespace xxx\Renderers {

    use DOMDocument;
    use DOMXPath;
    
    class FrontPageRenderer
    {
        /**
         * @var
         *
         */
        private $add_content;
        
        //Rendert die Frontpage mit hilfe von DOMDocument
        public function renderFrontpage($template, $content)
        {
            $dom = new DOMDocument();
            $xpath = new DOMXPath($dom);

            $xpath->registerNamespace('html', "http://www.w3.org/1999/xhtml");

            $dom->appendChild($dom->importNode($template->documentElement, true));
            //Added den Content der Seite in der Class main. 
            $this->add_content = $xpath->query('//html:div[@class="content"]')->item(0);
            $this->add_content->appendChild($dom->importNode($content->documentElement, true));
            return $dom->saveXML();
        }

    }
}