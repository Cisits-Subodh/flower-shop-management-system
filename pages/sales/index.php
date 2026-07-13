<?php

use Subod\FlowerShopManagementSystem\App\Controllers\SalesController;

$salesController = new SalesController();
$saless = $salesController->getAll();
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
                        <th>Item Name </th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Rate</th>
                        <th></th>
                        <th></th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($saless as $sales) {
                    


                    ?>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>