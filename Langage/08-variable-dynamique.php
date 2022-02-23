<?php

$toto = 'titi';
$titi = 'tata';

var_dump($$toto); // tata ($titi)

function hello() {
    return 'Bonjour';
}

$maFonction = 'hello';
var_dump($maFonction()); // hello() => Bonjour