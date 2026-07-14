<?php

use Subod\FlowerShopManagementSystem\App\Controllers\CustomerController;
use Subod\FlowerShopManagementSystem\App\Controllers\SalesController;

$salesController = new SalesController();
$sales = $salesController->getAll();

$customerController = new CustomerController();

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
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
            <marquee behavior="" direction="">Hi! My name is Subodh.</marquee>
            <div class="head">
                <h3>Sales</h3>
            </div>

            <div class="button">
                <a href="/sales/new" class="button">New Sales</a>
            </div>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>S.No</th>
                        <th>Customer Name </th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($sales as $sale) {
                        $customer = $customerController->get($sale['customer_id']);


                    ?>
                        <tr>

                            <td><?= $sale['id'] ?></td>
                            <td> <a href="sales_item"> <?= $customer['name'] ?></a></td>
                            <td><?= $sale['date'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>