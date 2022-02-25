<?php

function redirectAndExit(string $url) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $url);
    exit();
}

function showNotFound() {
    header('HTTP/1.1 404 Not Found');
    require_once '../templates/404.php';
    exit();
}