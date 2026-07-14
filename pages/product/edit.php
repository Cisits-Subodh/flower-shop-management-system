<?php

use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;

$productController = new ProductController();
$products = $productController->getAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
                <h3>Product</h3>
            </div>
            <div class="options">
                <a href="/product/new" class="button">New Product</a>
            </div>
            <table class="crud-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>List</th>
                        <th>GST</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) { ?>
                        <tr>
                            <?php $id = $product['id'] ?>
                            <td><?= $id ?></td>
                            <td><a href="<?= '/product/edit?id=' . $id ?>"><?= $product['name'] ?></a></td>
                            <td><?= $product['unit'] ?></td>
                            <td><?= $product['list'] ?></td>
                            <td><?= $product['rate'] ?></td>
                            <td><?= $product['gst'] ?></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>