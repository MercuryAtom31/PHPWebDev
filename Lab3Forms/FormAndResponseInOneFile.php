<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab3 Form and Response in on File</title>
</head>
<body>
<h1>Lab 3 - Forms</h1>
<!--Form that submits to itself.-->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    User Name: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['username'])){
    $username = $_POST['username'];
    if (empty($username)){
        echo "Username field is empty.";
    } else {
        echo $username;
    }
}
?>
</body>
</html>
