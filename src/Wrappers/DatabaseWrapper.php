<?php
/**
 * Created by PhpStorm.
 * User: inflgl
 * Date: 24.05.2016
 * Time: 16:50
 */

namespace xxx\Wrappers {

    use PDO;
    use PDOStatement;

    class DatabaseWrapper
    {
        /**
         * @var \PDO
         */
        private $pdo;

        /**
         * @var bool
         */
        private $isConnected = false;
        private $host = 'localhost';
        private $host2 = 'xxx';
        private $database = 'xxx';
        private $username = 'xxx';
        private $password = 'xxx';
        
        /**
         * @return PDO
         *
         */
        public function getPDO()
        {
            return $this->connect();
        }

        /**
         * @return PDO
         *
         */
        private function connect()
        {
            if (!$this->isConnected) {
                $this->pdo = new PDO("mysql:host=$this->host2;dbname=$this->database", $this->username, $this->password);
            }else{
                die('Ups, Something went wrong!');
            }
            
            return $this->pdo;

        }
    }        
}