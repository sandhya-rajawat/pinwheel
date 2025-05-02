<?php
// namespace Src;

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 's@ndhya1133';
    private $database = 'pinwheel';
    private $port = '33066';
    private $connection;

    public function __construct() {
        $this->connection = new \mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database,
            $this->port
        );

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
