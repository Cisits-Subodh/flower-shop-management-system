<?php

use Subod\FlowerShopManagementSystem\App\Utility\Gstlist;
use Subod\FlowerShopManagementSystem\App\Utility\StockItem;

$stockItem = new StockItem();
$stockitemnames = $stockItem->getAllNames();

$gstlist = new Gstlist();
$gstlists = $gstlist->getAllNames();

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
            <form action="/purchase/create" method="post">
                <div class="top-section">
                    <div class="left">
                        <label for="supplier_invoice_no">Supplier Invoice No</label>
                        <input type="text" name="supplier_invoice_no" id="supplier_invoice_no">

                        <div class="center">
                            <label for="">Party Name</label>
                            <input type="text" name="party_name" id="party_name">
                        </div>
                    </div>

                    <div class="right">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">
                    </div>
                </div>

                <table class="item-details" id="my-table">
                    <thead>
                        <tr>
                            <th>Sl#</th>
                            <th>Particulars</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>GST</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="" id="" value="1"></td>
                            <td>
                                <input type="text" list="particularslist" name="particulars" id="particulars">
                                <datalist id="particularslist">

                                    <?php foreach ($stockitemnames as $stockitemname) { ?>
                                        <option value="<?= $stockitemname['name'] ?>"></option>
                                    <?php } ?>

                                </datalist>

                            </td>

                            <td><input type="text" name="quantity" id="quantity" onchange="calc(0)"></td>
                            <td><input type="text" name="rate" id="rate" onchange="calc(0)"></td>

                            <td>
                                <input type="text" name="" id="gst">
                                <datalist id="gstlist">
                                    <?php foreach ($gstlists as $gstlist) { ?>
                                        <option value="<? $gstlist['gstlist'] ?>"> </option>
                                    <?php }  ?>
                                </datalist>
                            </td>

                            <td> <input type="text" name="amount" id="amount"></td>

                        </tr>
                    </tbody>
                </table>

                <div class="bottom-section">

                </div>
                <div class="button-section">
                    <button>Submit</button>
                    <button type="button" onclick="addRow()">+</button>
                    <button type="button" onclick="deleteRow()">-</button>
                </div>
            </form>
        </main>

    </div>
    <script src="/assets/js/script.js"></script>

</body>

</html>