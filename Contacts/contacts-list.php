<?php
require 'model.php';

$contacts = get_all_contacts();

require 'templates/contacts-list.php';
