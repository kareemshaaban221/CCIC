<?php

session_start();

if (isset($_SESSION['user'])) {
    session_unset();
}

header('Location: login.php');
exit;
