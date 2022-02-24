<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // insérer
    var_dump($_POST);
}

require_once '../templates/contacts-add.php';