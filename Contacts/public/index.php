<?php
require_once '../config.php';
require_once '../model.php';
require_once '../utils.php';

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
    case '/contacts/add/':
        require_once '../controllers/contacts-add.php';
        break;
    case '/contacts/update/':
        require_once '../controllers/contacts-update.php';
        break;
    case '/societes/':
        require_once '../controllers/societes-list.php';
        break;
    case '/societes/show/':
        require_once '../controllers/societes-show.php';
        break;
    case '/societes/add/':
        require_once '../controllers/societes-add.php';
        break;
    default:
        require_once '../templates/404.php';
}
