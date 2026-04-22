<?php

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
            <div class="options">
                <a href="/purchase" class="button">New Purchase</a>
            </div>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>S.No</th>
                        <th>Particular</th>
                        <th>Quty</th>
                        <th>Rate</th>
                        <th>GST</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($users as $user) { ?>
                       
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>