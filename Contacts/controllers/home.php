<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO valider que ce soit soit white, beige ou lightgrey
    $theme = $_POST['theme'];

    setcookie('theme', $theme, time() + 60 * 60 * 24 * 30);

    redirectAndExit('/');
}

require_once '../templates/home.php';