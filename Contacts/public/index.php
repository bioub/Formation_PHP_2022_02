<?php
require_once '../config.php';
require_once '../model.php';

if (!isset($_SERVER['PATH_INFO'])) {
    require_once '../controllers/home.php';
    exit();
}

switch ($_SERVER['PATH_INFO']) {
    case '/contacts/':
        require_once '../controllers/contacts-list.php';
        break;
    case '/contacts/show/':
        require_once '../controllers/contacts-show.php';
        break;
    case '/societes/':
        require_once '../controllers/societes-list.php';
        break;
    case '/societes/show/':
        require_once '../controllers/societes-show.php';
        break;
    default:
        require_once '../templates/404.php';
}
