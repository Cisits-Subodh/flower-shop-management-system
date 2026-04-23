

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h3>New Staff</h3>
            </div>
            <div class="new-form">
                <form action="/staff/create" method="post">
                    <label for=" ">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="">Email-id</label>
                    <input type="email" id="Email-id" name="email_id" required>
                    <label for=" ">Mobile-No</label>
                    <input type="number" id="mobile" name="mobile" required>
                    <label for="">Date of Birth</label>
                    <input type="date" name="dob" id="dob" required>
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="gender" required>
                    <label for="">Address</label>
                    <input type="text" id="adress" name="adress" required>
                    <label for="">District</label>
                    <input type="text" id="district" name="district" required>
                    <label for="">City</label>
                    <input type="text"name="city"id="city" required>
                    <label for="">State</label>
                    <input type="text"name="state"id="state"required> 
                    <label for="">Pin Code</label>
                    <input type="pin code" id="pin_code" name="pin_code" required>

                    <button class="button-s">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>