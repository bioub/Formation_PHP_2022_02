<?php /** @type array $contacts */ ?>
<?php $title = 'Liste des contacts'; ?>
<?php ob_start() ?>
    <h2><?=$title?></h2>
    <!-- ul>li*3>lorem2 -->
    <ul>
        <?php foreach ($contacts as $contact) : ?>
            <li>
                <a href="contacts-show.php?id=<?=$contact['id']?>">
                    <?=$contact['first_name']?> <?=$contact['last_name']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>