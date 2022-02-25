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

        $dest = '../public/uploads/' . $_FILES['photo']['name'];

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $dest)) {
            $im = imagecreatefrompng($dest);
            $im2 = imagescale($im, 100);
            $black = imagecolorallocate($im2, 0, 0, 0);

            // On rend l'arrière-plan transparent
            imagecolortransparent($im2, $black);

            imagepng($im2, $dest);
            imagedestroy($im2);
            imagedestroy($im);

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