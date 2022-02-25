<?php
if (!isset($_GET['id'])) {
    redirectAndExit('/index.php/societes/');
}

$id = $_GET['id'];

$societe = get_societe_by_id($id);

if (!$societe) {
    showNotFound();
}

require_once '../templates/societes-show.php';
