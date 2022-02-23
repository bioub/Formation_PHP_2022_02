<?php

// Créer et appeler une fonction qui affiche un nombre
// aléatoire compris en 0 et 100 avec la fonction
// var_dump
function afficheEntierAlea(): void {
    var_dump(mt_rand(0, 100));
}

afficheEntierAlea();

// Créer une fonction qui reçoit en entrée
// un prénom et nom et qui affiche le nom complet
// avec var_dump
function afficheNomComplet(string $prenom, string $nom): void {
    var_dump("$prenom $nom");
}

// Créer une fonction qui retourne true ou false
// true si un nombre passé en entrée est un multiple de 10
// false sinon
// l'appeler avec un if / else
function estMultipleDe10(int $entier): bool {
    return $entier % 10 === 0;
}

if (estMultipleDe10(40)) {
    echo "40 est un multiple de 10\n";
}

// Créer une fonction qui retourne la somme
// de tous les éléments d'un tableau
// l'appeler avec un tableau en exemple
/**
 * @param int[] $entiers
 * @return int
 */
function sumArray(array $entiers): int {
    return array_sum($entiers);
}

var_dump(sumArray([1, 2, 3, 4, 5])); // 15

// Créer une fonction qui retourne la somme
// de tous les paramètres
function sumParams(int ...$entiers): int {
    return array_sum($entiers);
}

$nbs = [1, 2, 3, 4, 5];
var_dump(sumParams(1, 2, 3, 4, 5)); // 15
var_dump(sumParams(...$nbs)); // 15
// (spread operator) équivalent à :
var_dump(sumParams($nbs[0], $nbs[1], $nbs[2], $nbs[3], $nbs[4])); // 15


// Créer une fonction qui retourne les valeurs min et max
// d'un tableau
// l'appeler avec un tableau en exemple
function getMinMax(array $array): array {
    return ['min' => min($array), 'max' => max($array)];
}

var_dump(getMinMax($nbs));

function genMinMax(array $array) {
    yield min($array);
    yield max($array);
}

$gen = genMinMax($nbs);
$min = $gen->current();
$gen->next();
$max = $gen->current();
var_dump($min);
var_dump($max);

foreach (genMinMax($nbs) as $value) {
    var_dump($value);
}

// Créer une fonction qui transforme tous les éléments d'un tableau
// en majuscule
// l'appeler avec un tableau de prénom en exemple
$names = ['Romain', 'Eric'];

function transformArrayUppercase(&$array): void {
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = strtoupper($array[$i]);
    }
}

transformArrayUppercase($names);

var_dump($names);
