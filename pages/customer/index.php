    <?php

    use Subod\FlowerShopManagementSystem\App\Controllers\CustomerController;

    $customerController = new CustomerController();
    $customers = $customerController->getAll();

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>customer</title>
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
                <h3>Customer</h3>
                <a href="/customer/new" class="button">new customer</a>
                <table class="crud-table">
                    <thead class="border">
                        <tr>
                            <th>Customer_id</th>
                            <th>Name</th>
                            <th>Mobile no</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pin code</th>
                        </tr>

                    </thead>

                </table>
                <tbody>
                    <?php foreach ($customers as $customer) { ?>
                        <tr>
                            <td><?= $customer['customer_id']  ?></td>
                            <td><?= $customer['name'] ?></td>
                            <td><?= $customer['mobile_no'] ?></td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td><?= $customer['city'] ?></td>
                            <td><?= $customer['district'] ?></td>
                            <td><?= $customer['state'] ?></td>
                            <td><?= $customer['pincode'] ?></td>
                        </tr>

                    <?php } ?>


                </tbody>
            </main>

        </div>

    </body>

    </html>