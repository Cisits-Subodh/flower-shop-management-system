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
                        <!-- <th></th> -->
                        <th>S.No.</th>
                        <!-- <th></th> -->
                        <th>Supplier Name</th>
                        <th>Mobile No</th>
                        <th>Email Id</th>
                        <th>Address</th>
                        <th>GSTIN</th>
                        <th>Bank A/C</th>
                        <th>Pin Code</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="border">
                    <?php foreach ($suppliers as $supplier) { ?>
                        <tr>
                            <td><?= $supplier['id'] ?></td>
                            <td><?= $supplier['supplier_name'] ?></td>
                            <td><?= $supplier['mobile_no'] ?></td>
                            <td><?= $supplier['email_id'] ?></td>
                            <td><?= $supplier['address'] ?></td>
                            <td><?= $supplier['gst'] ?></td>
                            <td><?= $supplier['bank_ac'] ?></td>
                            <td><?= $supplier['pincode'] ?></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>