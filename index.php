<?php
require __DIR__ . "/vendor/autoload.php";

use Subod\FlowerShopManagementSystem\App\Controllers\UserController;

$request = $_SERVER['REQUEST_URI'];

if ($request == "/user/login") {
    require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/login.php";
} elseif ($request == "/user/authenticate") {
    UserController::authenticate();
} elseif ($request == "/user/admin-dashboard") {
    require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/admin-dashboard.php";
} elseif ($request == "/user/staff-dashboard") {
    require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/staff-dashboard.php";
} else {
    require $_SERVER['DOCUMENT_ROOT'] . "/pages/error.php";
}
