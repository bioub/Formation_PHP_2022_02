<?php $title = 'Ajouter un contact'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <form method="post">
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
            <button>Ajouter</button>
        </p>
    </form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>