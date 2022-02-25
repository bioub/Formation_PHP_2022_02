<?php $title = 'Ajouter un contact'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <?php if (isset($error)) : ?>
    <p><?=$error?></p>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <p>
            Prénom : <input name="first_name" />
        </p>
        <p>
            Nom : <input name="last_name" />
        </p>
        <p>
            Email : <input name="email" />
        </p>
        <p>
            Téléphone : <input name="phone" />
        </p>
        <p>
            Photo : <input type="file" name="photo" />
        </p>
        <p>
            <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token']?>" />
            <button>Ajouter</button>
        </p>
    </form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>