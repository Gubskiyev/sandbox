<?php
require_once "model/database_class.php";

class User {

    public $db;
    
    public function __construct() {
        $this->db = new DataBase();
    }
    
    public function getAut($login, $pass) {
        $this->db->select();
    }
}