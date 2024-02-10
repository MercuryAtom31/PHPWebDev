<?php
// session_start() Initializes session data.
session_start();
// isset() Determines if a variable is set and is not NULL.
if (isset($_POST["btnLogin"])){
    if (empty($_POST["username"]) || empty($_POST["password"])){
        echo '<script>alert("Both Fields are Required")</script>';
        // header('location:loginpage.php');
    } else {

        // Set the username as the one passed with POST request.
        $username = $_POST["username"];
        $password = $_POST["password"];
        /*
         * Consider using more secure password hashing methods than md5,
         * such as bcrypt or Argon2, to enhance security.
         *
         * The stored password on the database is going to be
         * the hashed version of the user's password.
         */
        $hashed_password = md5($password);

        //Hashed of "fedorita" is 02fc609182a60f0dcc04e510ef94b328
        if ($username == "fedora"
            && $hashed_password == "02fc609182a60f0dcc04e510ef94b328") {

            $_SESSION["username"] = $username;
            /*
             * Setting a cookie for the username.
             */
            $cookieName = "user_" . $username;
//           The "/" means that the cookie is available in entire website
            setcookie($cookieName, $username, time() + 60, "/");

            header('location:content.php');
            //exit();
        } else {
            echo "<script>alert('Wrong User Details')</script>";
        }
//      if the username or password are incorrect, it will print this line.
        echo "<script>alert(\"$username : $password \")</script>";
    }
}

