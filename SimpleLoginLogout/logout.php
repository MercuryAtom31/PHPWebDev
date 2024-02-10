<?php
session_start();
// After being redirected to this page, the session is going to get destroyed.
//session_destroy();
// And the user will be redirected onto the login page.
header("location:loginpage.php");
?>