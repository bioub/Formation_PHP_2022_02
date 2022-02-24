<?php $title = "Home Page"; ?>
<?php ob_start() ?>
<h2>Bienvenue dans notre application</h2>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>
