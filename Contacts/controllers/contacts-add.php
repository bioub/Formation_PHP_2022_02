<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // https://www.php.net/manual/fr/function.filter-input-array.php
    $contact = filter_input_array(INPUT_POST, [
        'first_name' => FILTER_DEFAULT,
        'last_name' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'phone' => FILTER_DEFAULT,
    ]);

    if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = 'Le token n\'est pas valide';
    } else {
        unset($_SESSION['csrf_token']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], '../public/uploads/' . $_FILES['photo']['name'])) {
            $contact['photo'] = $_FILES['photo']['name'];
            $id = insert_contact($contact);

            redirectAndExit('/index.php/contacts/show/?id=' . $id);
        } else {
            $error = 'Le fichier n\'est pas valide';
        }

    }
}

$_SESSION['csrf_token'] = uniqid();

require_once '../templates/contacts-add.php';