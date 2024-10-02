<?php
class Database {
    private $host = 'localhost';
    private $port = '3306';
    private $db_name = 'bank';
    private $username = 'root';
    private $password = 'root';

    // Method to connect to the database
    protected function connect() {

        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name;
        $conn = new PDO($dsn, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    }
}
?>
