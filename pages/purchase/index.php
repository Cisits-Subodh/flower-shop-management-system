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
            <form action="" class="container-col>
                <div class=" container-right">
                <label for="">Supplier Invoice No.</label>
                <input type=" text" id="Supplier" name="suppier">
                <div class="container-right">
                    <label for="">Party A/c Name</label>
                    <input type="text" id="partyname" id="partyname">
                </div>
                <div class="container-right">
                    <label for="">PartyName</label>
                    <input type="text" id="party" name="Party">
                </div>
                <div class="container-left">
                    <label for="">Date</label>
                    <input type="date" id="date" name="date">
                </div>

                </section>


                <div class="options">
                    <a href="/purchase" class="button">New Purchase</a>
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
                                <td><?= $purchase['']  ?></td>
                                <td><?= $purchase[''] ?></td>
                                <td><?= $purchase[''] ?></td>
                                <td><?= $purchase[''] ?></td>
                                <td><?= $purchase[''] ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
        </main>
    </div>
</body>

</html>