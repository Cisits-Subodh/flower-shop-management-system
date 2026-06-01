<?php

use Subod\FlowerShopManagementSystem\App\Controllers\SupplierController;

$supplierController = new SupplierController();
$suppliers = $supplierController->getAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
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
            <div class="h-3">
                <h3>Supplier</h3>
            </div>
            <div class="button">
                <a href="supplier/new">New Supplier</a>
            </div>

            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>S.No.</th>
                        <th>Business_Name</th>
                        <th>Supplier_Name</th>
                        <th>Mobile_No</th>
                        <th>Email_Id</th>
                        <th>Office_Add</th>
                        <th>GST</th>
                        <th>Payment_Terms</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($suppliers as $supplier) { ?>


                        <tr>
                            <td><?= $supplier['id'] ?></td>
                            <td><?= $supplier['business_name'] ?></td>
                            <td><?= $supplier['supplier_name'] ?></td>
                            <td><?= $supplier['mobile_No'] ?></td>
                            <td><?= $supplier['email_id'] ?></td>
                            <td><?= $supplier['office_address'] ?></td>
                            <td><?= $supplier['gst'] ?></td>
                            <td><?= $supplier['payment_terms'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>