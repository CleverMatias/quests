<?php

/*

Se você pensar em um papel como um plano e uma letra como uma marcação neste plano, então estas letras dividem o plano em regiões. Por exemplo, as letras A, D e O dividem o plano em 2 pois possuem um espaço confinado em seu desenho, ou um “buraco”. Outras letras como B possuem 2 buracos e letras como C e E não possuem buracos.

Deste modo podemos considerar que o número de buracos em um texto é igual a soma dos buracos nas palavras dele.

A sua tarefa é, dado um texto qualquer, encontre a quantidade de buracos nele.

*/

$texto = 'Deste modo podemos considerar que o numero de buracos em um texto';

$buracos = array(
	'A' => 1,
	'B' => 2,
	'D' => 1,
	'O' => 1,
	'P' => 1,
	'Q' => 1,
	'R' => 1
);

$count = 0;

for($i = 1; $i < strlen($texto); $i++)
{
	if(array_key_exists(strtoupper($texto[$i]), $buracos))
	{
		echo $texto[$i] . '-';
		++$count;
	}
}

echo '<br/><br/>' . $texto . '<br /><br />';

echo $count;