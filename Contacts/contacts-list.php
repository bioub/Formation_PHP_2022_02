<?php
require_once 'model.php';

$contacts = get_all_contacts();

require_once 'templates/contacts-list.php';
