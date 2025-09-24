<?php
session_start();
?>
<!Doctype html>
<html lang = "en">
    <head>
        <title> Main Imperial Intelligence Agency </title>
        <link rel="icon" type="image/png" href="MIAALogo.png">
        <link rel="stylesheet" href = "style.css">
</head>
<body class = "loginbody">
    <div class = "container">
        <div class = "form-box" id = "login-form">
        <form action="index.php" method="post">
            <h2>Delta File Archives</h2>
            <input type="Username" name = "Username" id = "email" placeholder="Username" class = "Uname" required>
            <input type="Password" name = "Password" id = "password" placeholder="Password" class = "Pword" required>
            <button type="submit"  name="login" class = "login-button">LOGIN</button>
        </form>
        </div>
    </div>
</body>
</html>
