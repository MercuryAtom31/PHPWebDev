<?php
session_start();
if (!isset($_COOKIE["cookieName"])) {
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Logout Cookies and Session</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Login Logout Cookies and Session</h1>
<!-- The file that is going to process the form is loginprocessing.php?-->
<form action="loginprocessing.php" method="post">
    Username: <input type="text" name="username" placeholder="Enter Username"
                     value="<?php echo $_SESSION["username"] ?? ''; ?>"><br>
    Password: <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" value="Login" name="btnLogin">
</form>
<a href="content.php" style="align-content: center">Register</a>
</body>
</html>
