<?php

class User {

    public $id;
    public $fname;
    public $lname;

}

$conn = new PDO("mysql:host=127.0.0.1;dbname=users;", "root", "");

$res = $conn->query("SELECT * FROM users");

echo "<pre>";

var_dump($res->fetchAll(PDO::FETCH_CLASS, User::class));
