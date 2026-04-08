<?php

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
            <a href="/product/new" class="button">New Product</a>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['staff_id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td><?= $user['dob'] ?></td>
                            <td><a href="">View</a> <a href="">Edit</a></td>
                        </tr>
                    <?php } ?> -->
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>