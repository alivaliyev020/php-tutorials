<?php

$x = 'Anar,Tural,Fuad,Kenan,Aysel,Samir';
echo $x;

echo'<br><br>';

$x = explode(',',$x);

print_r($x);

echo'<br><br>';

echo $x[2];

echo'<br><br>';

echo'X maasivinde '.count($x).' element var';

echo'<br><br>';

for($i=0; $i<count($x); $i++)
{echo ($i+1).'. '.$x[$i].'<br>';}


?>