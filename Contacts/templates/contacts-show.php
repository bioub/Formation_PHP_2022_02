<?php /** @type array $contact */ ?>
<?php $title = "$contact[first_name] $contact[last_name]"; ?>
<?php ob_start() ?>
    <h2><?= $title ?></h2>
    <?php if (isset($contact['email'])) : ?>
        <p>
            Email : <?= $contact['email'] ?>
        </p>
    <?php endif; ?>
    <?php if (isset($contact['phone'])) : ?>
        <p>
            Phone : <?= $contact['phone'] ?>
        </p>
    <?php endif; ?>
    <a href="/index.php/contacts/">Retour à la liste</a>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>
