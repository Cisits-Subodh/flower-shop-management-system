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
                <h3>New Customer form</h3>
            </div>

            <form action="/customer/create" method="post" class="form-2">
                

                <div class="inputgroup">
                    <label for=" ">Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="inputgroup">
                    <label for="">Mobile</label>
                    <input type="number" id="mobile" name="mobile" required>
                </div>

                <div class="inputgroup">
                    <label> Email_id</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="inputgroup">
                    <label for="">Date of Birth</label>
                    <input type="date" name="dob" id="dob" required>
                </div>

                <div class="inputgroup">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="gender" required>
                </div>

                <div class="inputgroup">
                    <label for="">Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="inputgroup">
                    <label for="">City</label>
                    <input type="text" name="city" id="city" required>
                </div>
                <div class="inputgroup">
                    <label for="">District</label>
                    <input type="text" id="district" name="district" required>
                </div>
                <div class="inputgroup">
                    <label for="">State</label>
                    <input type="text" name="state" id="state" required>
                </div>
                <div class="inputgroup">
                    <label for="">Pin Code</label>
                    <input type="text" id="pincode" name="pincode" required>
                </div>
                <div class="button-s">
                    <button>Submit</button>
                </div>
            </form>
        </main>
    </div>
</body>

</html>