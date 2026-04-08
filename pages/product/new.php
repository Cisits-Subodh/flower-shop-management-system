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
                    <label for=" ">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="">Email-id</label>
                    <input type="email" id="Email-id" name="email id" required>
                    <label for="Mobile">Mobile-No</label>
                    <input type="Mobile-No" id="mobile no" name="mobile no" required>
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" required>
                    <label for="">Address</label>
                    <input type="text" id="address" name="Address" required>
                    <label for="">District</label>
                    <input type="text" id="District" name="District" required>
                    <label for="">Pin Code</label>
                    <input type="pin code" id="pin code" name="pin code" required>
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender" required>
                    <button class="button-s">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>