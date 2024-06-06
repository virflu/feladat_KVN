<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'HomeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once __DIR__ . "/../controllers/$controller.php";

$controllerInstance = new $controller();
$controllerInstance->$action();


