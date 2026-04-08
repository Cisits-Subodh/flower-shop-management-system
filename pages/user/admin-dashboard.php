<?php

use Subod\FlowerShopManagementSystem\App\Controllers\StaffController;

$staffController = new StaffController();
$staff_count = $staffController->count();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/pages/includes/header.php" ?>
    </header>
    <div class="col-1">
        <div class="main-container">
            <aside>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/pages/includes/aside.php" ?>
            </aside>

            <div class="main-layout">
                <main class="main">
                    <h3>Dashboard</h3>
                    <div class="card-menu">
                        <div>
                            <label class="label">Products</label>
                            <a href="/product" class="data">10</a>
                        </div>
                        <div>
                            <label class="label">Staff</label>
                            <a href="/staff" class="data"><?= $staff_count ?></a>
                        </div>
                        <div>
                            <label class="label">Orders</label>
                            <label class="data"></label>
                        </div>
                        <div>
                            <label> Stock Management</label>
                        </div>

                        <div>
                            <label>purchase</label>
                        </div>
                        <div>
                            <label>Notification Manage</label>
                        </div>
                        <div>
                            <label>payment Status</label>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>