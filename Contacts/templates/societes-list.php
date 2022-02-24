<?php $title = 'Liste des sociétés'; ?>
<?php ob_start(); ?>
<h2>Liste des sociétés</h2>
<table>
    <tbody>
        <?php foreach ($societes as $societe) : ?>
        <tr>
            <td><?=$societe['name']?></td>
            <td>
                <a href="/index.php/societes/show/?id=<?=$societe['id']?>">Afficher</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>
