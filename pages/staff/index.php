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
        <main class="main">
            <h3>Staff</h3>
            <a href="/staff/new" class="button">New Staff</a>
            <table>
                <thead class="border">
                    <th>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>DOB</td>
                    </th>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['staff_id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td><?= $user['dob'] ?></td>
                            <td><a href="">View</a> <a href="">Edit</a></td>
                        </tr>
                    <?php } ?>
                </tbody> 
            </table>
        </main>
</body>

</html>