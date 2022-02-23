<?php

$nbs = [3, 4, 5];

// premier
var_dump($nbs[0]);

// dernier
var_dump($nbs[count($nbs) - 1]);

// accéder à un élément inexistant du tableau
// (?? donne une valeur par défaut)
var_dump($nbs[3] ?? 'Pas de valeur à l indice 3');

// écrit au prochain indice du tableau numérique
$nbs[count($nbs)] = 6;
$nbs[] = 7;
array_push($nbs, 8);

// les indices ne sont pas obligés de se suivre
$nbs[34] = 100;
var_dump($nbs);

unset($nbs[34]); // supprimer l'élément

for ($i=0; $i<count($nbs); $i++) {
    var_dump($nbs[$i]);
}

foreach ($nbs as $nb) {
    var_dump($nb);
}

$copyNbs = $nbs; // passage par copie/valeur

$copyNbs[0] = 1000;
var_dump($nbs[0]); // 3
var_dump($copyNbs[0]); // 1000

$refNbs = &$nbs; // passage par référence
$refNbs[0] = 1000;
var_dump($nbs[0]); // 1000
var_dump($refNbs[0]); // 1000

$contacts = [
    'Apple' => 'Steve Jobs',
    'Microsoft' => 'Bill Gates',
    'Facebook' => 'Mark Zuckerberg',
];

foreach ($contacts as $societe => $nom) {
    var_dump($societe);
    var_dump($nom);
}

if (isset($contacts['Facebook'])) {
    echo "Le contact Facebook est : $contacts[Facebook]\n";
} else {
    echo "Pas de contact Facebook\n";
}

unset($contacts['Facebook']); // supprimer l'élément


$contacts = [
    ['firstName' => 'Steve', 'lastName' => 'Jobs'],
    ['firstName' => 'Bill', 'lastName' => 'Gates'],
    ['firstName' => 'Mark', 'lastName' => 'Zuckerberg'],
];

function compareContact($c1, $c2) {
    return ($c1['firstName'] < $c2['firstName']) ? -1 : 1;
}

uasort($contacts, 'compareContact');

var_dump($contacts);