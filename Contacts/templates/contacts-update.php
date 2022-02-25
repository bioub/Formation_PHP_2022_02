<?php $title = 'Mettre à jour un contact'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <form method="post">
        <p>
            Prénom : <input name="first_name" value="<?=$contact['first_name']?>" />
        </p>
        <p>
            Nom : <input name="last_name" value="<?=$contact['last_name']?>" />
        </p>
        <p>
            Email : <input name="email" value="<?=$contact['email']?>" />
        </p>
        <p>
            Téléphone : <input name="phone" value="<?=$contact['phone']?>" />
        </p>
        <p>
            <button>Ajouter</button>
        </p>
    </form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>