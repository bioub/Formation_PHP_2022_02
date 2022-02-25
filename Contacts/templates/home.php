<?php $title = "Home Page"; ?>
<?php ob_start() ?>
<h2>Bienvenue dans notre application</h2>
<form method="post">
    Theme :
    <select name="theme">
        <option>white</option>
        <option <?=($theme === 'beige')?'selected':''?>>beige</option>
        <option <?=($theme === 'lightgrey')?'selected':''?>>lightgrey</option>
    </select>
    <button>Change</button>
</form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>
