<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 04.06.2016
 * Time: 15:01
 */

namespace xxx\Queries {


    use xxx\Wrappers\DatabaseWrapper;

    class SelectUserFromDatabaseQuery
    {
        /**
         * @var DatabaseWrapper
         *
         */
        private $databaseWrapper;

        public function __construct()
        {
            $this->databaseWrapper = new DatabaseWrapper;
        }

        public function execute($username)
        {
            return $this->getUserFromDB($username);
        }

        private function getUserFromDB($username)
        {
            return $this->databaseWrapper->getPDO()->prepare(
                "SELECT * FROM users WHERE username = '$username'");
        }


    }
}