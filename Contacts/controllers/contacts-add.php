<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // https://www.php.net/manual/fr/function.filter-input-array.php
    $contact = filter_input_array(INPUT_POST, [
        'first_name' => FILTER_DEFAULT,
        'last_name' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'phone' => FILTER_DEFAULT,
    ]);

    $id = insert_contact($contact);

    redirectAndExit('/index.php/contacts/show/?id='.$id);
}

require_once '../templates/contacts-add.php';