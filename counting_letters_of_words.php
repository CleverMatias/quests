<?php

$input = "Simple code is critical. When I first started interviewing I'd ask people to solve hard problems. This didn't work. As Spolsky's famous The Guerrilla Guide to Interviewing argues, however, simple problems are just as good, or better. Simple problems test simple skills, and simple skills are the basis of complex ones. A programmer who struggles to loop through a bunch of words will be at sea performing far more complex tasks. If you can't boil water your Toad in the Hole is likely to come out wrong.";

$input = str_replace('.', '', $input);
$input = str_replace(',', '', $input);
$input = str_replace('\'', '', $input);

$words = explode(' ', $input);
$result = array();

foreach($words as $word)
{
	if(isset($result[strlen($word)]))
	{
		$result[strlen($word)]++;
	}
	else
	{
		$result[strlen($word)] = 1;
	}
	
}

foreach($result as $key => $r)
{
	echo $r . " words with " . $key . " letters.<br/>";
}