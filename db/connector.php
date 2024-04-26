<?php

class DBConnection
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "socialmediafor99";
    protected $pdo; // Store PDO object here

    public function __construct()
    {
        $this->pdo = $this->connect(); // Establish connection on object creation
    }

    protected function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            print_r($e);
        }
    }

    public function closeConnection()
    {
        $this->pdo = null; // Close the connection by setting PDO object to null
    }
}
