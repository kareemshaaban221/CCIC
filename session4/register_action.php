<?php

// var_dump($_POST);
// die;

define("MAX_LENGTH", 3);

$errors = require "validate.php";

if (empty($errors)) {
    $data = [
        'users' => []
    ];
    // read file
    if (file_exists('users.json')) {
        $file_contents = file_get_contents('users.json');
        $data = empty($file_contents) ? $data : json_decode($file_contents, true);
    }
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    unset($_POST['password_confirmation']);
    // append array got from file
    $data['users'][] = $_POST;
    // put content
    file_put_contents('users.json', json_encode($data, JSON_PRETTY_PRINT));
    
    header("Location: show_data.php");
} else {
    require "register.php";
}

