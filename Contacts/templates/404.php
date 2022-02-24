<?php $title = 'Not Found'; ?>
<?php ob_start() ?>
    <h2>Page not found</h2>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>