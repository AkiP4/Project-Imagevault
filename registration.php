<!DOCTYPE html>
<HTML>

<head>
    <link rel="stylesheet" href="style.css">
</head>

    <title>User registration</title>
<body>
    <div class="header">
        <h2>Registration</h2>
    </div>

    <form method="post" action="registration.php">

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p class="signIn">
            Already a member? <a href="login.php">Sign in</a>
        </p>

    </form>
</body>

</HTML>