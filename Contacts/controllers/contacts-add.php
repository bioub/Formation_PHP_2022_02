<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO filtrer le POST avec
    // https://www.php.net/manual/fr/function.filter-input-array.php
    $contact = $_POST;

    $id = insert_contact($contact);

    header('Location: /index.php/contacts/show/?id='.$id);
    exit();
}

require_once '../templates/contacts-add.php';