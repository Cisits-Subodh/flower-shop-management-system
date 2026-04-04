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
    <main class="main">
        <h3>New Staff</h3>
        <div class="new-form">
        <form action="/staff/create" method="post" >
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="gender">Gender</label>
            <div class="input-g">
            <input type="text" name="gender" id="gender">

            </div>
            <input type="date" name="dob" id="dob">
            <button>Submit</button>
        </form>
        </div>
    </main>
</body>

</html>