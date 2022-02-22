<?php

// 1 - Créer 2 variables qui contiennent
// votre prénom et votre nom
// les afficher avec var_dump
$prenom = 'Romain';
$nom = 'Bohdanowicz';

var_dump($prenom);
var_dump($nom);

// 2 - Créer une variable qui contient
// votre nom complet à partir des
// variables prénom et nom
// l'afficher avec var_dump
$nomComplet = $prenom . ' ' . $nom;
var_dump($nomComplet);
$nomComplet = "$prenom $nom";
var_dump($nomComplet);

// lire en diagonale
// https://www.php.net/manual/fr/ref.var.php
// https://www.php.net/manual/fr/ref.strings.php
// https://www.php.net/manual/fr/ref.math.php

// 3 - Créer une variable qui contient un nombre entier
// aléatoire entre 0 et 100
// puis l'afficher avec var_dump
$entierAlea = mt_rand(0, 100);
var_dump($entierAlea);
$entierAlea = random_int(0, 100);
var_dump($entierAlea);

// 4 - Créer une variable de type booléen
// qui contient true si le nombre aléatoire
// est supérieur à 10, false sinon
// puis l'afficher avec var_dump
$estSuperieurA10 = $entierAlea > 10;
var_dump($estSuperieurA10);

// 5 - Créer une variable qui contient true
// si le nombre aléatoire est un multiple de 10, false sinon
// puis l'afficher avec var_dump

$estMultipleDe10 = $entierAlea % 10 === 0;
var_dump($estMultipleDe10);

// 6 - Créer 2 variables $nb1 et $nb2 qui contiennent
// 2 entiers aléatoires entre 0 et 100
// les afficher avec var_dump
// puis intervertir le contenu de ces 2 variables
// les afficher avec var_dump
$nb1 = mt_rand(0, 100);
$nb2 = mt_rand(0, 100);

var_dump($nb1);
var_dump($nb2);

//$tmp = $nb1;
//$nb1 = $nb2;
//$nb2 = $tmp;
//
//var_dump($nb1);
//var_dump($nb2);

// array($nb1, $nb2);

// Depuis PHP 4
//list($nb2, $nb1) = array($nb1, $nb2);
//var_dump($nb1);
//var_dump($nb2);

// Depuis PHP 7.1
[$nb2, $nb1] = [$nb1, $nb2];
var_dump($nb1);
var_dump($nb2);