<?php /** @type array $contact */ ?>
<?php $title = "$contact[first_name] $contact[last_name]"; ?>
<?php ob_start() ?>
    <h2><?=$title?></h2>
    <p>
        Email : <?=$contact['email']?>
    </p>
    <p>
        Phone : <?=$contact['phone']?>
    </p>
    <a href="contacts-list.php">Retour à la liste</a>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>