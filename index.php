<?php
require __DIR__ . "/vendor/autoload.php";

use Subod\FlowerShopManagementSystem\App\Controllers\StaffController;
use Subod\FlowerShopManagementSystem\App\Controllers\UserController;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case "/":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/login.php";
        break;
    case "/user/authenticate":
        $userController = new UserController();
        $userController->authenticate();
        break;
    case "/user/admin-dashboard":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/admin-dashboard.php";
        break;
    case "/user/staff-dashboard":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/user/staff-dashboard.php";
        break;
    case "/master":
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/master/index.php";
        break;
    case "/master/decoration":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/master/decoration/index.php";
        break;
    case "/staff":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/staff/index.php";
        break;
    case "/staff/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/staff/new.php";
        break;
    case "/staff/create":
        $staffController = new StaffController();
        $staffController->create();
        break;
    case "/product":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/product/index.php";
        break;
    case "/product/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/product/new.php";
        break;
    default:
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/error.php";
}
