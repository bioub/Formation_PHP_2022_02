<?php /** @type array $contacts */ ?>
<?php $title = 'Liste des contacts'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <!-- ul>li*3>lorem2 -->
    <ul>
        <?php foreach ($contacts as $contact) : ?>
            <li>
                <a href="/index.php/contacts/show/?id=<?=htmlspecialchars($contact['id'])?>">
                    <?=htmlspecialchars($contact['first_name'])?> <?=htmlspecialchars($contact['last_name'])?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>