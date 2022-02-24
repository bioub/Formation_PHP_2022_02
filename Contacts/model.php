<?php
function open_database_connection()
{
    /* Vous devriez toujours activer le rapport d'erreur pour mysqli avant une tentative de connexion */
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    /* Définir le jeu de caractère désiré après avoir établie une connexion */
    mysqli_set_charset($mysqli, 'utf8mb4');

    return $mysqli;
}

function close_database_connection(&$mysqli)
{
    mysqli_close($mysqli);
    $mysqli = null;
}

function get_all_contacts()
{
    $mysqli = open_database_connection();

    $sql = <<<SQL
SELECT id, first_name, last_name, email, phone
FROM contact
LIMIT 0, 100
SQL;

    $result = mysqli_query($mysqli, $sql);

    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    close_database_connection($mysqli);

    return $contacts;
}

function get_contact_by_id($id)
{
    $mysqli = open_database_connection();

    // Tester avec cette URL
    // http://contacts.localhost/index.php/contacts/show/?id=1+OR+2+ORDER+BY+id+DESC
    // $id = "1 OR 2 ORDER BY id DESC"

    $sql = <<<SQL
SELECT id, first_name, last_name, email, phone
FROM contact
WHERE id = ?
LIMIT 0, 1
SQL;

    $stmt = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $contact = mysqli_fetch_assoc($result);

    close_database_connection($mysqli);

    return $contact;
}

function get_all_societes() {
    $mysqli = open_database_connection();

    $sql = <<<SQL
SELECT id, name, city
FROM societe
LIMIT 0, 100
SQL;

    $result = mysqli_query($mysqli, $sql);

    $contact = mysqli_fetch_all($result, MYSQLI_ASSOC);

    close_database_connection($mysqli);

    return $contact;
}

function get_societe_by_id($id)
{
    $mysqli = open_database_connection();

    $sql = <<<SQL
SELECT id, name, city
FROM societe
WHERE id = ?
LIMIT 0, 1
SQL;

    $stmt = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $societe = mysqli_fetch_assoc($result);

    close_database_connection($mysqli);

    return $societe;
}