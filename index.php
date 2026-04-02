<?php
require __DIR__ . "/vendor/autoload.php";

use Subod\FlowerShopManagementSystem\App\Controllers\UserController;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case "/":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/login.php";
        break;
    case "/user/authenticate":
        UserController::authenticate();
        break;
    case "/user/admin-dashboard":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/admin-dashboard.php";
        break;
    case "/user/staff-dashboard":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/staff-dashboard.php";
        break;
    default:
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/error.php";
}
