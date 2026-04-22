<?php

use Subod\FlowerShopManagementSystem\App\Controllers\StaffController;

$staffController = new StaffController();
$users = $staffController->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
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
            <h3>Staff</h3>
            <a href="/staff/new" class="button">New Staff</a>
            <table class="crud-table">
                <thead class="border">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile-No.</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>District</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pin-code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['staff_id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td><?= $user['dob'] ?></td>
                            <td><?= $user['adress'] ?></td>
                            <td><?= $user['district'] ?></td>
                            <td><?= $user['city'] ?></td>
                            <td><?= $user['state'] ?></td>
                            <td><?= $user['pincode'] ?></td>
                            <td><a href="">View</a> <a href="">Edit</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>