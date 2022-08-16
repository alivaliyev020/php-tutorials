<?php


echo'<h3>1-den 10-a qeder ededlerin ekrana verilmesi</h4>';

echo'<h4>Do/While</h4>';

$i = 0;

do
{$i++; echo $i.' ';}
while($i<10);


echo'<h4>While</h4>';

$i = 0;

while($i<10)
{$i++; echo $i.' ';}



echo'<h4>for</h4>';

for($i=0; $i<10; $i++)
{echo $i.' ';}


echo'<h4>1-den 10-a qeder ededlerin cemi</h4>';

$i = 0;
$cem = 0;

while($i<10)
{$i++; $cem = $cem + $i;}

echo'1-den 10-a qeder ededlerin cemi: '.$cem;


echo'<h4>Vurma cedveli</h4>';

$i = 0;
$eded = 7;

while($i<10)
{
	$i++; 
	$c = $eded * $i;
	echo $eded.'*'.$i.'='.$c.'<br>';
}

?>