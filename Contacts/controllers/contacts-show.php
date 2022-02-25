<?php
// pas d'id dans l'url, on redirige
if (!isset($_GET['id'])) {
    redirectAndExit('/index.php/contacts/');
}

$id = $_GET['id'];

$contact = get_contact_by_id($id);

if (!$contact) {
    showNotFound();
}

require_once '../templates/contacts-show.php';
