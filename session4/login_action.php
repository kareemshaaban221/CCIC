<?php

session_start();

// var_dump($_POST);
// die;
echo "<pre>";

define("MAX_LENGTH", 3);

$errors = require "validate_login.php";

if (empty($errors)) {
    // find user with email input
    if (isset($_POST['submit'])) {
        extract($_POST);

        $rawUsers = file_get_contents("users.json");
        $data = json_decode($rawUsers, true);

        $login_user = null;
        foreach ($data['users'] as $user) {
            if ($user['email'] == $email) {
                $login_user = $user;
                break;
            }
        }
        if (is_null($login_user)) {
            echo "email is not exists";
            die;
        }
        // check if password is correct
        if (! password_verify($password, $login_user['password'])) {
            echo "password is wrong";
            die;
        }
        $_SESSION['user'] = serialize($login_user);
        header("Location: show_data.php");
    }
} else {
    require "register.php";
}

echo "</pre>";


