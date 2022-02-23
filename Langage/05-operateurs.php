<?php

// égalité (conversion implicite)
var_dump(12 == '12'); // true

// égalité (même type)
var_dump(12 === '12'); // false

var_dump(12 < 40);
var_dump('abc' < 'def');

var_dump(10 % 2 === 0); // 5 * 2 + 0
var_dump(2 ** 3); // 2 * 2 * 2 === 8

var_dump($prenom ?? ''); // nullish coalescing


var_dump((int) '123');
var_dump((string) 3456);
var_dump((boolean) 3456);
