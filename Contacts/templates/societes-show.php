<?php $title = 'Détail de la société'; ?>
<?php ob_start(); ?>
    <h2>Détail de la société</h2>
    <p>
        Nom : <b><?=$societe['name']?></b>
    </p>
    <?php if (isset($societe['city'])) : ?>
        <p>
            Ville : <b><?=$societe['city']?></b>
        </p>
    <?php endif; ?>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>

