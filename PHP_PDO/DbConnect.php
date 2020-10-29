<?php
class DbConnect
{
    private $host = "localhost";
    private $dbName = "php_pdo";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->host; dbname=$this->dbName", 
            $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
$obj = new DbConnect;
$obj->connect();