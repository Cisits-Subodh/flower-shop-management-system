<?php

use Subod\FlowerShopManagementSystem\App\Utility\Listgroup;

$listGroup = new Listgroup();
$listgroups = $listGroup->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
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
                <h3>New Product</h3>
            </div>
            <div class="new-form">
                <form action="/product/create" method="post">
                    <div class="">
                        <label for=" ">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <label for="">List</label>
                    <select name="" id="">
                        <?php foreach ($listgroups as $listgroup) { ?>
                            <option value="<?= $listgroup['list'] ?>"><?= $listgroup['list'] ?></option>
                        <?php } ?>
                    </select>
                    <input type="text" id="list" name="list">
                    <label for="">Unit</label>
                    <input type="text" id="unit" id="unit">
                    <label for="">Supplier</label>
                    <input type="text" name="supplier" id="supplier">
                    <label for="">Rate</label>
                    <input type="text" name="rate" id="rate">
                    <label for="">GST</label>
                    <input type="text" name="gst" id="gst">
                    <button class="button-s">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>