<?php

use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;

$productController = new ProductController();
$products = $productController->getAll();

$options = '';
foreach ($products as $product) {
    $options .= '<option value="' . $product['id'] . '">' .
        htmlspecialchars($product['name']) .
        '</option>';
}
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
            <form action="/order/create" method="post">

                <div class="column-2">

                    <div class="right">
                        <label for="">Service</label>
                        <input type="text" name="service" id="service" required>
                    </div>

                    <div class="right">
                        <label for="">Customer Name</label>
                        <input type="text" name="Customer_name" id="customer_name" required>
                    </div>

                    <div class="center">
                        <label for="">Mobile No</label>
                        <input type="text" name="mobile" id="mobile">
                    </div>
                    <div class="right">
                        <label for="">Form</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="left">
                        <label for="">To</label>
                        <input type="date" name="date" id="date">

                    </div>
                </div>

                <div class="head-top">
                    <h3>Items</h3>
                </div>

                <!-- <form action="/order/creat" method="post" class="from"> -->
                <!-- <div class="gruop">
                    <th><label for="">Item Name</label></th>
                    <input type="text" name="item_name" id="item_name" require>
                </div>
                <div class="gruop">

                    <label for="">Quantity</label>
                    <input type="text" name="quantity" id="quantity" require>
                </div>
                <div class="gruop">

                    <label for="">Rate</label>
                    <input type="text" name="rate" id="rate" require>
                </div>
                <div class="gruop">
                    <label for="">Gst</label>
                    <input type="text" name="gst" id="gst">
                </div>
                <div class="gruop">
                    <label for="">Amount</label>
                    <input type="text" name="amount" id="amount" require>

                </div> -->
                <table class="item-details" id="my-table">
                    <thead>
                        <tr>
                            <th>Pariculars</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Gst</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="select">
                                <select name="name[]" id="name">
                                    <?php foreach ($products as $product) { ?>
                                        <option value=" <?= $product['id'] ?>"><?= $product['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td><input type="quantity" id="quantity" require class="width"></td>
                            <td><input type="text" name="rate" id="rate" required></td>
                            <td><input type="text" name="gst" id="gst"></td>
                            <td><input type="text" name="amount" id="amount" required></td>
                        </tr>
                    </tbody>

                </table>

                <div class="button-h">
                    <button type="submit">submit</button>
                </div>
            </form>
        </main>
    </div>
</body>

</html>