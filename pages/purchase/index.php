<?php

use Subod\FlowerShopManagementSystem\App\Controllers\PurchaseController;
use Subod\FlowerShopManagementSystem\App\Controllers\SupplierController;

$purchaseController = new PurchaseController();
$purchases = $purchaseController->getAll();

$supplierController = new SupplierController();
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

            <div class="button">
                <a href="/purchase/new" class="button">New Purchase</a>
            </div>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>S.No</th>
                        <th>Supplier Invoice No.</th>
                        <th>Supplier Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($purchases as $purchase) {
                        $supplier = $supplierController->get($purchase['supplier_id']);
                    ?>
                        <tr>
                            <td><?= $purchase['id'] ?></td>
                            <td><?= $purchase['supplier_invoice_no']  ?></td>
                            <td><?= $supplier['supplier_name'] ?></td>
                            <td><?= $purchase['date'] ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>