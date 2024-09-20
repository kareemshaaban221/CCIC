<?php

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

                } else {
                    $errors['password'] = 'Please confirm your password';
                }
            } else {
                $errors['password'] = 'Please confirm your password';
            }
        }
    } else {
        $errors['password'] = 'password is required';
    }
}

return $errors;
