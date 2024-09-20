<?php

// var_dump($_POST);
// die;

define("MAX_LENGTH", 3);

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);
    if (!isset($fname) || strlen($fname) < MAX_LENGTH) {
        $errors['fname'] = 'This name is invalid';
    }
    if (!isset($lname) || strlen($lname) < MAX_LENGTH) {
        $errors['lname'] = 'This name is invalid';
    }
    if (!isset($email) || strlen($email) < 1) {
        $errors['email'] = 'Email is required';
    }
    if (isset($password)) {
        if (strlen($password) < 8) {
            $errors['password'] = "Password must be more than or equal 8 chars";
        } else {
            if (isset($password_confirmation) && !empty($password_confirmation)) {
                if ($password === $password_confirmation) {
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
                    }
                }
            } else {
                $errors['password'] = 'Please confirm your password';
            }
        }
    } else {
        $errors['password'] = 'password is required';
    }
}

header("Location: show_data.php");
