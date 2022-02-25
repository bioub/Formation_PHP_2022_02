<?php

$validUserName = 'romain';
$validPassword = '1234';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUserName && $password === $validPassword) {
        $_SESSION['username'] = $username;
        redirectAndExit('/');
    }
}

require_once '../templates/login.php';