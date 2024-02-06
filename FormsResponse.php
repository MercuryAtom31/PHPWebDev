<html>

<head>
    <title>Forms Response</title>
</head>
<body>
<?php
    $username = $_POST['username'];
/*
Determine whether a variable is considered to be empty.
A variable is considered empty if it does not exist or
if its value equals FALSE. empty() does not generate a warning
if the variable does not exist.
*/
    if (empty($username)){
        echo "Username field is empty.";
    } else {
        echo $username;
    }
    ?>
</body>
</html>

