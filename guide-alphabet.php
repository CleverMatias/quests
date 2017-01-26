<?php
/*
-- http://codegolf.stackexchange.com/questions/107907/guide-the-alphabet

Given an array of directions, where the directions are defined as follows:
NW  N  NE
W   .   E
SW  S  SE
Or as indexes (you may use these indices for directions instead of the strings above):
0 1 2
3 . 4
5 6 7
You may choose either format, supporting both is not required by the challenge. 
Generate the corresponding alphabet String that represents the drawn path, starting with A. 
The number of directions will never exceed 25, meaning that it can never go past Z, so you don't have to handle this scenario. 
No other input formats will be accepted unless you can explain why these formats do not work due to a language limitation. 
This is easier to explain using a verbosely worked out example.

So, lets look at a quick example:
[E,SE,N,S,S,S,NW,W,N] or [4,7,1,6,6,6,0,3,1]
Always start with A.
A
Go East to B.
A-B
Go South East to C.
A-B 
   \
    C
Go North to D.
A-B D
   \|
    C
Go back South to E, overwriting C.
A-B D
   \|
    E
Continue South for 2 cycles to both F and G.
A-B D
   \|
    E
    |
    F
    |
    G
Go North West to H.
A-B D
   \|
    E
    |
  H F
   \|
    G
Go West to I.
A-B D
   \|
    E
    |
I-H F
   \|
    G
End to the North at point J.
A-B D
   \|
J   E
|   |
I-H F
   \|
    G
The final value you would return is by reading the final graph left to right, top to bottom:
ABD
JE
IHF
G
Resulting in:
ABDJEIHFG
*/

$taked = array(4,7,1,6,6,6,0,3,1);

$controls = array(
                0 => array('l' => -1, 'r' => -1), 
                1 => array('l' => -1, 'r' => 0),
                2 => array('l' => -1, 'r' => 1),
                3 => array('l' => 0, 'r' => -1),
                4 => array('l' => 0, 'r' => 1),
                5 => array('l' => 1, 'r' => -1),
                6 => array('l' => 1, 'r' => 0),
                7 => array('l' => 1, 'r' => 1),
            );

$map_line = $map_row = 0;
$positions[$map_line][$map_row] = 'a';
$i = 'b';

foreach ($taked as $value) {
    $map_line += $controls[$value]['l'];
    $map_row += $controls[$value]['r'];
    $positions[$map_line][$map_row] = $i;
    ++$i;
}

$result = '';
foreach ($positions as $line => $row) {
    ksort($row);
    foreach ($row as $char) {
        $result .= strtoupper($char);
    }
}

echo $result;