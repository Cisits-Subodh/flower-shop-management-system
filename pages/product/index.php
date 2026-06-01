<?php
use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;

$product=new ProductController();
$products =$product->getAll();

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
            <h3>Product</h3>
            <div class="button">
            <a href="/product/new">New Product</a>

            </div>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Rate</th>
                        <th>gst</th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($products as $product) { ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['listgroup'] ?></td>
                            <td><?= $product['unit'] ?></td>
                            <td><?= $product['rate'] ?></td>
                            <td><?= $product['gst'] ?></td>
                            <td><a href="">View</a> <a href="">Edit</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>