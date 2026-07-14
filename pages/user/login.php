<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="full"> 
    <div class="hed">
        <h1>Login</h1>
    </div>

    <form action="/user/authenticate" method="post">

        <div class="inputbox">
            <input type="text" name="user_id" id="user_id" placeholder="User Id">
        </div>

        <div class="inputbox">
        <input type="password" name="password" id="password" placeholder="Password">
        <div class="button">
        <button>Login</button>
        <p>forget password</p>
        </div>
        </div>

    </form>
    </div>

</body>

</html>