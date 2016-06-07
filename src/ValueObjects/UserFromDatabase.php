<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 04.06.2016
 * Time: 15:38
 */

namespace xxx\ValueObjects {


    use xxx\Queries\SelectUserFromDatabaseQuery;

    class UserFromDatabase
    {
        /**
         * @var SelectUserFromDatabaseQuery
         * 
         */
        private $selectUserFromDatabasequery;

        /**
         * @var string
         * 
         */
        private $username;
        private $passwordHash;
        private $firstname;
        private $lastname;
        private $joinDate;
        private $group;
        
        public function __construct($username)
        {
            $this->selectUserFromDatabasequery = new SelectUserFromDatabaseQuery;
            
            $stmt = $this->selectUserFromDatabasequery->execute($username);
            $stmt->bindParam(1, $username);
            $stmt->execute();

            foreach ($stmt as $row){
                $this->username = $row['username'];
                $this->passwordHash = $row['password'];
                $this->firstname = $row['firstname'];
                $this->lastname = $row['lastname'];
                $this->joinDate = $row['joined'];
                $this->group = $row['group'];
            }
        }
        
        public function getUsername()
        {
            return $this->username;
        }

        public function getPasswordHash()
        {
            return $this->passwordHash;
        }
        
        public function getFirstName()
        {
            return $this->firstname;
        }

        public function getLastName()
        {
            return $this->lastname;
        }

        public function getJoinDate()
        {
            return $this->joinDate;
        }

        public function getGroup()
        {
            return $this->group;
        }
    }
}