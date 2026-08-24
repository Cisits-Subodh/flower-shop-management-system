<?php

use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;
use Subod\FlowerShopManagementSystem\App\Utility\SelectService;

$productController = new ProductController();
$products = $productController->getAll();


$selectService = new SelectService();
$selectServices = $selectService->getAllNames();


// $options ='';
// foreach($selectService as $selectService)
//     {
//         $options .='<option value="'.$selectService['id'].'">'.
//         htmlspecialchars($selectService['name']).
//         '</option>';
//     }

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
                <table class="item-details" id="my-table">


                    <div class="column-2">

                        <div class="input-type">
                            <label>Select Service</label>
                            <select name="selectservice[]" id="selectservice[]">
                                <?php foreach ($selectServices as $selectservice) { ?>
                                    <option value="<?= $selectservice['id'] ?>"><?= $selectservice['service_type'] ?></option>
                                <?php } ?>

                            </select>

                        </div>

                        <div class="right">
                            <label for="">Customer Name</label>
                            <input type="text" name="name" id="name" required>
                        </div>

                        <div class="center">
                            <label for="">Mobile No</label>
                            <input type="text" name="mobile" id="mobile">
                        </div>
                        <div class="right">
                            <label for="">Order Date</label>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="left">
                            <label for="">Work Date</label>
                            <input type="date" name="date" id="date">

                        </div>
                    </div>

                    <div class="head-top">
                        <h3>Items</h3>
                    </div>
                    <!--bottom -->
                    <div class="column-4">
                        <div class="gruop">
                            <label>#S.No</label>
                            <input type="number" name="s_no" id="s_no">
                        </div>
                        <div class="gruop">
                            <label for="">Item Name</label>
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
                        </div>

                    </div>
                    <div class="group-total">
                        <label>Total Amount</label>
                        <input type="text" name="Tamount" id="Tamount">
                    </div>

                    <div class="button-h">
                        <button type="submit">submit</button>
                        <button type="button">+</button>
                        <button type="button"> - </button>
                    </div>
                    

            </form>
            </table>
        </main>
    </div>
    <script>
        function addRow() {
            const
        } <
        script >
            <
            /body>

            <
            /html>