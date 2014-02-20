<?php

/*
Definimos dois vetores A e B de dimensão n em termos de componentes como:
A = (a1, a2, a3, ..., an) e B = (b1, b2, b3, ..., bn)

O produto escalar entre esses vetores é descrito como:
A . B = a1 * b1 + a2 * b2 + a3 * b3 + ... + an * bn

Desenvolva um programa que, dado dois vetores de dimensão n, retorne o produto escalar entre eles.
*/


$a = array(1, 7);
$b = array(2, -3);

if(count($a) != count($b))
	die('Numero de termos esta desigual.');

$result = 0;

for($i = 0; $i < count($a); $i++)
	$result += $a[$i] * $b[$i];

echo $result;