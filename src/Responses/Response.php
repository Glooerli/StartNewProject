<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.05.2016
 * Time: 23:01
 */

namespace xxx\Responses {


    class Response
    {
        /**
         * @var string
         */
        private $body;

        /**
         * @param string $body
         */
        public function __construct($body)
        {
            $this->body = $body;
        }
        
        public function send()
        {
            echo $this->body;
        }
    }
}