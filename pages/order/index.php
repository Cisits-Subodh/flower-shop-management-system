<?php

use Subod\FlowerShopManagementSystem\App\Controllers\OrderController;
use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;

$orderController = new OrderController();
$orders = $orderController->getAll();

$productControll = new ProductController();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>
    <header class="header">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/pages/includes/header.php" ?>
    </header>
    <div class="main-container">
        <aside>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/pages/includes/aside.php" ?>
        </aside>
        <main class="main">
            <div class="head">
                <h3>Order</h3>
            </div>
            <div class="button">
                <a href="order/new">New order</a>
            </div>

            <table class="crud-table">
                <thead class="border">
                    <th>S.No</th>
                    <th>Select Service</th>
                    <th>Customer Name</th>
                    <th>Mobile No</th>
                    <th>Order Date</th>
                    <th>Working Date</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </thead>
                <tbody>
                    <?php foreach ($orders as $order) {?>
                        <tr>
                            <td><?= $order['ordercustomer_id'] ?></td>
                            <td><?= $order['type_service'] ?></td>
                            <td><?= $order['name'] ?></td>
                            <td><?= $order['date'] ?></td>
                            <td><?= $order['todate'] ?></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>