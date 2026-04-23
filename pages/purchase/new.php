<?php

use Subod\FlowerShopManagementSystem\App\Utility\StockItem;

$stockItem = new StockItem();
$stockitemnames = $stockItem->getAllNames();
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

            <div class="top-section">
                <div class="left">
                    <label for="supplier_invoice_no">Supplier Invoice No</label>
                    <input type="text" name="supplier_invoice_no" id="supplier_invoice_no">
                </div>
                <div class="right">
                    <label for="date">Date</label>
                    <input type="date" name="" id="">
                </div>
            </div>

            <table class="item-details">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Particulars</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td>
                            <input type="text" list="particularslist" name="particulars" id="particulars">
                            <datalist id="particularslist">
                                <?php foreach ($stockitemnames as $stockitemname) { ?>
                                    <option value="<?= $stockitemname['name'] ?>"></option>
                                <?php } ?>
                            </datalist>
                        </td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                        <td><input type="text" name="" id=""></td>
                    </tr>
                </tbody>
            </table>

            <div class="bottom-section">

            </div>
            <div class="button-section">
                <button>Submit</button>
                <button type="button">+</button>
                <button type="button">-</button>
            </div>
        </main>
    </div>
</body>

</html>