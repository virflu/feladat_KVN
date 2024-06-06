<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/User.php';

class UserService {
    private $db;

    public function __construct() {
        $this->db = getDBConnection();
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $user = new User();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $users[] = $user;
        }
        return $users;
    }
}
?>
