<?php
function hello(string $name) {
    return "Hello $name\n";
}

$names = ['Romain', 'Eric'];

foreach ($names as $n) {
    echo hello($n);
}
