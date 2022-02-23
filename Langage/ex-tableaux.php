<?php

// lire la référence des fonctions sur les tableaux
// https://www.php.net/manual/fr/ref.array.php

// 1 - Créer un tableau avec 100 entiers aléatoires entre 0 et 10
// l'afficher avec var_dump
$entierAleas = [];

for ($i = 0; $i < 100; $i++) {
    $entierAleas[] = mt_rand(0, 10);
}

var_dump($entierAleas);

$entierAleas = array_fill(0, 100, 0);
function genererEntierAlea()
{
    return mt_rand(0, 10);
}
$entierAleas = array_map('genererEntierAlea', $entierAleas);

var_dump($entierAleas);

// 2 - Afficher les éléments du tableau dans l'ordre à l'aide d'une boucle
foreach ($entierAleas as $entier) {
    var_dump($entier);
}

// 3 - Afficher les éléments du tableau en partant de la fin
// (avec une boucle ou en inversant l'ordre des éléments)
for ($i = count($entierAleas) - 1; $i >= 0; $i--) {
    var_dump($entierAleas[$i]);
}

foreach (array_reverse($entierAleas) as $entier) {
    var_dump($entier);
}

// 4 - Afficher le nombre de valeurs paires et impairs
$elementsPairs = 0;
$elementsImpairs = 0;

foreach ($entierAleas as $entier) {
    if ($entier % 2 === 0) {
        $elementsPairs++;
    } else {
        $elementsImpairs++;
    }
}

var_dump($elementsPairs);
var_dump($elementsImpairs);

function incrementElementsPairs($elementsPairs, $entier) {
    return ($entier % 2 === 0) ? $elementsPairs + 1 : $elementsPairs;
}

function incrementElementsImpairs($elementsImpairs, $entier) {
    return ($entier % 2 === 1) ? $elementsImpairs + 1 : $elementsImpairs;
}

$elementsPairs = array_reduce($entierAleas, 'incrementElementsPairs', 0);
$elementsImpairs = array_reduce($entierAleas, 'incrementElementsImpairs', 0);

var_dump($elementsPairs);
var_dump($elementsImpairs);

// [1, 2, 3, 4, 5]
// function sum($carry, $item) { return $carry + $item; }
//$carry = 0; $item = 1; $return = 1;
//$carry = 1; $item = 2; $return = 3;
//$carry = 3; $item = 3; $return = 6;
//$carry = 6; $item = 4; $return = 10;
//$carry = 10; $item = 5; $return = 15;


// 5 - Faire la somme de tous les éléments du tableau et afficher le résultat
$sum = array_sum($entierAleas);
var_dump($sum);

// 6 - Afficher le plus grand et le plus petit nombre du tableau
$min = min($entierAleas);
$max = max($entierAleas);

var_dump($min);
var_dump($max);

// 7 - Trier le tableau et l'afficher avec var_dump
$copy = $entierAleas;
sort($copy);
var_dump($copy);

// 8 - Dédoublonner le tableau et l'afficher avec var_dump
$entierAleasDedoublonne = array_unique($copy);
$entierAleasDedoublonne = array_values($entierAleasDedoublonne);
var_dump($entierAleasDedoublonne);