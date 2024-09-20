<?php

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);
    if (!isset($email) || strlen($email) < 1) {
        $errors['email'] = 'Email is required';
    }
    if (!isset($password)) {
        $errors['password'] = 'password is required';
    }
}

return $errors;
