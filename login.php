<?php
include ('scriptPhp/connect.php');
include ('scriptPhp/login_script.php')
?>

<!Doctype html>
<html lang = "en">
    <head>
        <title> Main Imperial Intelligence Agency </title>
        <link rel="icon" type="image/png" href="MIAALogo.png">
        <link rel="stylesheet" href = "css/loginStyle.css">
</head>
<body class = "loginbody">
    <div class = "container">
        <div class = "form-box" id = "login-form">
        <form name = "LoginForm" action = "login_script.php" onsubmit = "return isvalid()" method="POST">
            <h2>Delta File Archives</h2>
            <input type="text" name = "username" id = "username" placeholder="Username" class = "Uname" required>
            <input type="password" name = "password" id = "password" placeholder="Password" class = "Pword" required>
            <button type = "submit" id = "btn" name="submit" value = "login" class = "login-button">LOGIN</button>
        </form>
        </div>
    </div>
    <script src = "script/login.js"></script>
</body>
</html>
