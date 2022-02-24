<?php
require_once '../model.php';

$societes = get_all_societes();

require_once '../templates/societes-list.php';