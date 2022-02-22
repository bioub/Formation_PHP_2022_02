<?php
// pour démarrer le built-in server de PHP :
// php -S localhost:8081 02-hello-web.php
function hello(string $name) {
    return "Hello $name\n";
}

$names = ['Romain', 'Eric'];
?>
<ul>
    <?php foreach ($names as $n) : ?>
    <li><?=hello($n)?></li>
    <?php endforeach; ?>
</ul>

