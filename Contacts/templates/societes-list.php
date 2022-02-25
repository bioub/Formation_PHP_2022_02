<?php $title = 'Liste des sociétés'; ?>
<?php ob_start(); ?>
<h2>Liste des sociétés</h2>
<table>
    <tbody>
        <?php foreach ($societes as $societe) : ?>
        <tr>
            <td><?=htmlspecialchars($societe['name'])?></td>
            <td>
                <a href="/index.php/societes/show/?id=<?=htmlspecialchars($societe['id'])?>">Afficher</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="/index.php/societes/add/">Ajouter une société</a>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>

