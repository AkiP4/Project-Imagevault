<!DOCTYPE html>
<HTML>

<head>
</head>
    <title>User registration</title>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p class="signIn">
            Not yet a member? <a href="registration.php">Sign up</a>
        </p>

    </form>
</body>

</HTML>