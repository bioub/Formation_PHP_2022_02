<?php
function sum(int|float|string $a, int|float|string $b): float {
    return $a + $b;
}

var_dump(sum(1, 2));

// valeur par défaut
function hello($name = 'Romain') {
    return "Bonjour $name";
}

var_dump(hello()); // Bonjour Romain

// paramètres nommés
function bonjour($firstName = 'Romain', $lastName = 'Bohdanowicz') {
    return "Bonjour $firstName $lastName";
}

var_dump(bonjour(lastName: 'Dupont'));

var_dump(str_replace('jour', 'soir', 'Bonjour')); // Bonsoir
var_dump(str_replace(subject: 'Bonjour', search: 'jour', replace: 'soir')); // Bonsoir

// passage par référence
$nbs = [1, 2, 3, 4];

function array_square(&$array) {
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $array[$i] ** 2;
    }
}

array_square($nbs);
var_dump($nbs);

// paramètres variables (ancienne syntaxe)
function paramsToArray() {
    return func_get_args();
}

$array = paramsToArray(1, 2, 3, 4);
var_dump($array);

// paramètres variables (nouvelle syntaxe)
function paramsToArray2(...$params) {
    return $params;
}

$array = paramsToArray2(1, 2, 3, 4);
var_dump($array);

// fonctions fléchées (7.4+)
$entierAleas = array_fill(0, 100, 0);
$entierAleas = array_map(fn() => mt_rand(0, 10), $entierAleas);