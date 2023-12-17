<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lecturer Login</title>
   <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <h1>Lecturer Login</h1>
    <form action="login_process.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button class="login" type="submit">Login</button>
        <br>
        <button class="register"><a href="register.php">Register</a></button>
    </form>
</body>
</html>
