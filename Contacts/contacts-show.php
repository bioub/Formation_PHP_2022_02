<?php
require_once 'model.php';

// pas d'id dans l'url, on redirige
if (!isset($_GET['id'])) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: contacts-list.php');
    exit();
}

$id = $_GET['id'];

$contact = get_contact_by_id($id);

if (!$contact) {
    header('HTTP/1.1 404 Not Found');
    require_once 'templates/404.php';
    exit();
}

require_once 'templates/contacts-show.php';
