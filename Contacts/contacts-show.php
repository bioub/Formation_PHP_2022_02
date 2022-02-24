<?php
require_once 'model.php';

$id = $_GET['id'];
$contact = get_contact_by_id($id);

require_once 'templates/contacts-show.php';
