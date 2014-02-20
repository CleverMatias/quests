<?php

/*
Desenvolva um programa que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico. Os requisitos básicos são os seguintes:
- Entregar o menor número de notas;
- É possível sacar o valor solicitado com as notas disponíveis;
- Saldo do cliente infinito;
- Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para aumentar a dificuldade do problema);
- Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00
*/

$input = 80;

$notes = array(100, 50, 20, 10);

$t = 0;

$result = array();

do
{
	if(($input / $notes[$t]) < 1)
	{
		++$t;
		continue;
	}
	
	$result[$notes[$t]] = floor($input / $notes[$t]);
	$input = $input % $notes[$t];
	
	++$t;
}
while($input > 0);

foreach($result as $k => $r)
{
	echo $r . ' notes of ' . $k . '.<br/>';
}