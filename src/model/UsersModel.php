<?php

require_once __DIR__ . '../../config/database.php';

class UsersModel {
    private $db;

    public function __construct() {
        $instanceDatabase = new Database();
        $this->db = $instanceDatabase->connectDB();
    }

    public function findAllUsers() {
        try {
            $query = $this->db->query("SELECT * FROM usuario");
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
            exit;
        }
    }

    public function insertUsers(array $data){
        try {
            
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
            exit;
        }
    }
}