<?php

use Subod\FlowerShopManagementSystem\App\Utility\Listgroup;
use Subod\FlowerShopManagementSystem\App\Utility\Unit;
use Subod\FlowerShopManagementSystem\App\Utility\Supplier;

$listGroup = new Listgroup();
$listgroups = $listGroup->getAll();

$unit = new Unit();
$units = $unit->getAll();

$supplier = new Supplier();
$suppliers = $supplier->getAll();

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
                    <div class="card-menu-l">
                        <label for=" ">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="">

                        <label for="">Rate</label>
                        <input type="text" name="rate" id="rate">
                    </div>
                    <div class="card-menu-l">

                        <label for="">GST</label>
                        <input type="text" name="gst" id="gst">
                    </div>

                    <div class="">
                        <label for="">Category</label>
                        <select name="" id="">
                            <?php foreach ($listgroups as $listgroup) { ?>
                                <option value="<?= $listgroup['list'] ?>"><?= $listgroup['list'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="">

                        <label for="">Unit</label>
                        <select name="" id="">
                            <?php foreach ($units as $unit) { ?>
                                <option value="<?= $unit['unit'] ?>"><?= $unit['unit'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="">
                        <label for="">Supplier</label>
                        <select name="" id="">
                            <?php foreach ($suppliers as $supplier) { ?>
                        <option value="<?= $supplier['supplier'] ?>"> <?= $supplier['supplier'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <button class="button-s">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>