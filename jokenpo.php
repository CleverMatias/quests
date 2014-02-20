<?php

/*
Jokenpo é uma brincadeira japonesa, onde dois jogadores escolhem um dentre três possíveis itens: Pedra, Papel ou Tesoura.
O objetivo é fazer um juiz de Jokenpo que dada a jogada dos dois jogadores informa o resultado da partida.

As regras são as seguintes:
- Pedra empata com Pedra e ganha de Tesoura
- Tesoura empata com Tesoura e ganha de Papel
- Papel empata com Papel e ganha de Pedra


ADICIONEI:
Exibir todos os resultados possívels.

*/

$tools = array(
	
	0 => array(
		'name' => 'Pedra', 
		'w' => 2, 
		'l' => 1
	),
	
	1 => array(
		'name' => 'Papel', 
		'w' => 0, 
		'l' => 2
	),
	
	2 => array(
		'name' => 'Tesoura', 
		'w' => 1, 
		'l' => 0
	)
);

// Todas as combinações possíveis
foreach($tools as $t)
{
	echo $t['name'] . ' empata com ' . $t['name'] . '.<br/>';
	echo $t['name'] . ' ganha de ' . $tools[$t['w']]['name'] . '.<br/>';
	echo $t['name'] . ' perde de ' . $tools[$t['l']]['name'] . '.<br/>';
}

echo '<br />';

// Game
$first_player = 1;
$second_player = 2;

echo 'Jogador 1: ' . $tools[$first_player]['name'] . '.<br />';
echo 'Jogador 2: ' . $tools[$second_player]['name'] . '.<br />';

if($first_player == $second_player)
	echo 'Empate.';
else if($tools[$first_player]['w'] == $second_player)
	echo 'Vitoria jogagor 1: ' . $tools[$first_player]['name'] . ' ganha de ' . $tools[$second_player]['name'] . '.';
else
	echo 'Vitoria jogagor 2: ' . $tools[$second_player]['name'] . ' ganha de ' . $tools[$first_player]['name'] . '.';