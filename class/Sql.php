<?php
    class Sql extends PDO {

        private $conn;
        private $host;
        private $dbname;
        private $pass;
        private $user;

        public function __construct(){

            $this->conn = new PDO("mysql:host=localhost; dbname=test", "root", "");

        }

        private function setParams($statment, $parameters = array()) {

            foreach ($parameters as $key => $value) {
                
                $this->setParam($key, $value);

            }

        }

        private function setParam($statment, $key, $value) {

            $statment->bindParam($key, $value);

        }

        public function query($raw, $params= array()) {

            $stmt = $this->conn->prepare($raw);

            $this->setParams($stmt, $params);

            $stmt->execute();

            return $stmt;

        }

        public function select($raw, $params = array()):array {

            $stmt = $this->query($raw, $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

    }
?>