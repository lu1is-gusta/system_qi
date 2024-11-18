<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'mydb';
    private $username = 'root';
    private $password = '';
    private $connection;

    // public function __construct() {
        
    // }

    //melhorar essa classe depois
    public function connectDB(){
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->connection;
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
            exit;
        }
        
    }
}
