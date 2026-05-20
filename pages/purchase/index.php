<?php

use Subod\FlowerShopManagementSystem\App\Controllers\PurchaseController;

$purchaseController = new PurchaseController();
$purchases = $purchaseController->getAll();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase</title>
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
                <h3>Purchase</h3>
            </div>

            <div class="options">
                <a href="/purchase/new" class="button">New Purchase</a>
            </div>

            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>S.No</th>
                        <th>Particular</th>
                        <th>Quty</th>
                        <th>Rate</th>
                        <th>GST</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($purchases as $purchase) { ?>
                        <tr>
                            <?php $id = $purchase['id'] ?>
                            <td><?= $purchase['supplier_invoice_no']  ?></td>
                            <td><?= $purchase['id'] ?></td>
                            <td><?= $purchase['party_name'] ?></td>
                            <td><?= $purchase['particulars'] ?></td>
                            <td><?= $purchase['quantity'] ?></td>
                            <td><?= $purchase['rate'] ?></td>
                            <td><?= $purchase['date'] ?></td>
                            <td><?= $purchase['gst'] ?></td>
                            <td><?= $purchase['amount'] ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>