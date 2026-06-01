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
                <h3>Supplier</h3>
            </div>

            <form action="/supplier/create" method="post" class="from-2">
                <div class="inputgroup">
                    <label for="">S.No.</label>
                    <input type="text" name="s_no" id="s_no">
                </div>
                <div class="inputgroup">
                    <label>Business Name</label>
                    <input type="text" name="business_name" id="business_name" required>
                </div>
                <div class="inputgroup">
                    <label for="">Suppler Name</label>
                    <input type="text" name="supplier_name" id="supplier_name" required>
                </div>
                <div class="inputgroup">
                    <label>Mobile No</label>
                    <input type="number" name="mobile_no" id="mobile_no" required>
                </div>
                <div class="inputgroup">
                    <label for="">Email Id</label>
                    <input type="email" name="email_id" id="email_id" required>
                </div>
                <div class="inputgroup">
                    <label for="">Office Address</label>
                    <input type="text" name="office_address" id="required>
                </div>
                <div class=" inputgroup">
                    <label for="">GST</label>
                    <input type=" text" name="gst" id="gst" required>
                    <label for="">Payment Terms</label>
                    <input type="text" name="payment_terms" id="payment_terms" required>
                </div>
                <div class="inputgroup">
                    <label for="">Bank A/C</label>
                    <input type="number" name="back_ac" id="bank_ac" required>
                    <label for="">Date</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="">
                    <button>submit</button>

                </div>

            </form>

        </main>
    </div>
</body>

</html>