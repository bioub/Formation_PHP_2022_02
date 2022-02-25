<?php
// pas d'id dans l'url, on redirige
if (!isset($_GET['id'])) {
    redirectAndExit('/index.php/contacts/');
}

$id = (int) $_GET['id'];

$contact = get_contact_by_id($id);

if (!$contact) {
    showNotFound();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // https://www.php.net/manual/fr/function.filter-input-array.php
    $contact = filter_input_array(INPUT_POST, [
        'first_name' => FILTER_DEFAULT,
        'last_name' => FILTER_DEFAULT,
        'email' => FILTER_VALIDATE_EMAIL,
        'phone' => FILTER_DEFAULT,
    ]);

    $contact['id'] = $id; // /index.php/contacts/update/?id=3

    update_contact($contact);

    redirectAndExit('/index.php/contacts/show/?id='.$id);
}

require_once '../templates/contacts-update.php';