<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // https://www.php.net/manual/fr/function.filter-input-array.php
    $societe = filter_input_array(INPUT_POST, [
        'name' => FILTER_DEFAULT,
        'city' => FILTER_DEFAULT,
    ]);

    $id = insert_societe($societe);

    redirectAndExit('/index.php/societes/show/?id='.$id);
}

require_once '../templates/societes-add.php';