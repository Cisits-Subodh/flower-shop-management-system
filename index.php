<?php
require __DIR__ . "/vendor/autoload.php";

use Subod\FlowerShopManagementSystem\App\Controllers\CustomerController;
use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;
use Subod\FlowerShopManagementSystem\App\Controllers\PurchaseController;
use Subod\FlowerShopManagementSystem\App\Controllers\SalesController;
use Subod\FlowerShopManagementSystem\App\Controllers\StaffController;
use Subod\FlowerShopManagementSystem\App\Controllers\SupplierController;
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
    case "/product/create":
        $productController = new ProductController();
        $productController->create();
        break;
    case "/purchase":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/purchase/index.php";
        break;
    case "/purchase/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/purchase/new.php";
        break;
    case "/purchase/create":
        $purchaseController = new PurchaseController();
        $purchaseController->create();
        break;
    case "/customer":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/customer/index.php";
        break;
    case "/customer/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/customer/new.php";
        break;
    case "/customer/create":
        $customerController = new CustomerController();
        $customerController->create();
        break;
    case "/supplier":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/supplier/index.php";
        break;
    case "/supplier/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/supplier/new.php";
        break;
    case "/supplier/create":
        $supplierController = new SupplierController();
        $supplierController->create();
        break;
    case "/sales":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/sales/index.php";
        break;
    case "/sales/new":
        include $_SERVER['DOCUMENT_ROOT'] . "/pages/sales/new.php";
        break;
    case "/sales/create":
        $salesController =new SalesController();
        $salesController->create();
        break;

    default:
        require $_SERVER['DOCUMENT_ROOT'] . "/pages/error.php";
}
