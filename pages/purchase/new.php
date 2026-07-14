<?php

use Subod\FlowerShopManagementSystem\App\Controllers\ProductController;
use Subod\FlowerShopManagementSystem\App\Controllers\SupplierController;
use Subod\FlowerShopManagementSystem\App\Utility\Gstlist;
use Subod\FlowerShopManagementSystem\App\Utility\StockItem;

$productController = new ProductController();
$products = $productController->getAll();

$gstlist = new Gstlist();
$gstlists = $gstlist->getAllNames();

$supplierController = new SupplierController();
$suppliers = $supplierController->getAll();


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
                            <label for="">Supplier</label>

                            <select name="supplier" id="supplier">

                                <?php foreach ($suppliers as $supplier) { ?>
                                    <option value="<?= $supplier['id'] ?>"><?= $supplier['supplier_name'] ?></option>
                                <?php } ?>
                            </select>
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
                            <td><input type="text" name="" id="" value="1" required></td>
                            <td>
                                <select name="particulars[]" id="particulars">
                                    <?php foreach ($products as $product) { ?>
                                        <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>

                                    <?php } ?>

                                </select>

                            </td>

                            <td><input type="text" name="quantity[]" id="quantity" onchange="calc(0)" required></td>
                            <td><input type="text" name="rate[]" id="rate" onchange="calc(0)"></td>

                            <td>
                                <input type="text" name="gst[]" id="gst">
                                <datalist id="gstlist">
                                    <?php foreach ($gstlists as $gstlist) { ?>
                                        <option value="<? $gstlist['gst'] ?>"> </option>
                                    <?php }  ?>
                                </datalist>
                            </td>

                            <td> <input type="text" name="amount[]" id="amount" required></td>

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


                <div class="bottam">
                    <label for="">Total</label>
                    <input type="text" name="total" id="total">

                </div>
            </form>
        </main>

    </div>


    <script>
        function addRow() {

            const tableBody = document.querySelector("#my-table tbody");

            const rowCount = tableBody.rows.length + 1;

            const newRow = document.createElement("tr");

            const productOptions = `<?php echo $options ?>`;


            newRow.innerHTML = `
    <td><input type="text" name="sl_no[]" value="${rowCount}" readonly></td>
    <td>
        <select name="particulars[]" class="particulars">
            ${productOptions}
        </select>
    </td>
    <td><input type="text" name="quantity[]" onchange="calc(${rowCount - 1})"></td>
    <td><input type="text" name="rate[]" onchange="calc(${rowCount - 1})"></td>
    <td><input type="text" name="gst[]"></td>
    <td><input type="text" name="amount[]" onblur="addRow()"></td>
`;
            tableBody.appendChild(newRow);
        }

        function deleteRow() {

            const tableBody = document.querySelector("#my-table tbody");

            const rows = tableBody.querySelectorAll("tr");

            if (rows.length > 1) {
                tableBody.removeChild(tableBody.lastElementChild);
            } else {
                alert("At least one row is required for the purchase.");
            }
        }

        function calc(e) {
            const quantities = document.getElementsByName('quantity[]');
            const quantity = quantities[e].value

            const rates = document.getElementsByName('rate[]');
            const rate = rates[e].value;

            // const gsts = document.getElementsByName('gst[]');
            // const gst = gsts[e].value;

            const amt = quantity * rate;
            document.getElementsByName("amount[]")[e].value = amt;

        }
    </script>

</body>

</html>