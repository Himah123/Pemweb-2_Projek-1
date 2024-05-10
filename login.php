<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <center>
    <div>
        <h1>Login</h1>
        <form action="proses_login.php" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
    </center>
</body>
</html>