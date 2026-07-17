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
            <div class="button">
                <a href="order/new">New order</a>
            </div>

            <table class="crud-table">
                <thead class="border">
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>pariculars</th>
                    <th>Quantity</th>
                    <th>Rate< /th>
                    <th>Gst</th>
                    <th>Amount</th>


                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>