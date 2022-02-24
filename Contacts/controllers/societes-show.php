<?php
require_once '../model.php';

if (!isset($_GET['id'])) {
    header('HTTP/1.1 301 Move Permanently');
    header('Location: societes-list.php');
    exit();
}

$id = $_GET['id'];

$societe = get_societe_by_id($id);

if (!$societe) {
    header('HTTP/1.1 404 Move Permanently');
    require_once 'templates/404.php';
    exit();
}

require_once '../templates/societes-show.php';
