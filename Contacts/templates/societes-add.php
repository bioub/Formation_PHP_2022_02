<?php $title = 'Ajouter une société'; ?>
<?php ob_start() ?>
    <h2><?=htmlspecialchars($title)?></h2>
    <form method="post">
        <p>
            Nom : <input name="name" />
        </p>
        <p>
            Ville : <input name="city" />
        </p>
        <p>
            <button>Ajouter</button>
        </p>
    </form>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>