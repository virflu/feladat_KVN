<?php
require_once __DIR__ . '/../services/UserService.php';


class UserController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function listUsers() {
        $users = $this->userService->getAllUsers();
        include 'views/user_list.php';
    }
}
?>

