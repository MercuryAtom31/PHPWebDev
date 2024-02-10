<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: loginprocessing.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
</head>
<body>
<br/><br />
<div class="container" style="width:500px;">
    <h3>Shopping Cart</h3>
    <br/>
    <?php
        echo '<h1>Welcome - ' . $_SESSION["username"] . '</h1>';
    ?>
<!--    ERROR ENCOUNTERED: After login out, I was redirected to the loginPage.php-->
<!--    However, there was no content displayed. The error was fixed after -->
<!--    putting the following label tag outside the php tag.-->
    <label><a href="logout.php">Logout</a></label>
</div>
</body>
</html>
