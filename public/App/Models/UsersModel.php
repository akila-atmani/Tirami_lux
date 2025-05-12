<?php
require_once __DIR__ "/../Core/Database.php";

class UsersModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function findOne(int $id) {
        $query = "SELECT * FROM utilisateurs WHERE id = :id;";
        $sqlResult = "data";
        return $sqlResult;
    }
}