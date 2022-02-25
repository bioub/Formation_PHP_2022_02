<?php /** @type array $contact */ ?>
<?php $title = "$contact[first_name] $contact[last_name]"; ?>
<?php ob_start() ?>
    <h2><?= htmlspecialchars($title) ?></h2>
    <?php if (!empty($contact['email'])) : ?>
        <p>
            Email : <?= htmlspecialchars($contact['email']) ?>
        </p>
    <?php endif; ?>
    <?php if (!empty($contact['phone'])) : ?>
        <p>
            Phone : <?= htmlspecialchars($contact['phone']) ?>
        </p>
    <?php endif; ?>
    <?php if (!empty($contact['photo'])) : ?>
        <p>
            Photo : <img src="<?='/uploads/' . htmlspecialchars($contact['photo'])?>" />
        </p>
    <?php endif; ?>
    <a href="/index.php/contacts/update/?id=<?=$contact['id']?>">Mettre à jour ce contact</a>
    <a href="/index.php/contacts/">Retour à la liste</a>
<?php $content = ob_get_clean() ?>
<?php require_once 'layout.php'; ?>
