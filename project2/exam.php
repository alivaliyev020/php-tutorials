<h2>Canli sinaq</h2>


<?php

if(isset($_POST['d']))
{
	$bal = 0;

	if($_POST['s1']=='b')
	{$bal++; $c1 = '1. + ';}
	elseif(empty($_POST['s1']))
	{$c1 = '1. ? ';}
	else
	{$c1 = '1. - ';}

	

	if($_POST['s2']=='a')
	{$bal++; $c2 = '2. + ';}
	elseif(empty($_POST['s2']))
	{$c2 = '2. ? ';}
	else
	{$c2 = '2. - ';}


	

	if($_POST['s3']=='c')
	{$bal++; $c3 = '3. + ';}
	elseif(empty($_POST['s3']))
	{$c3 = '3. ? ';}
	else
	{$c3 = '3. - ';}


	
	if($_POST['s4']=='d')
	{$bal++; $c4 = '4. + ';}
	elseif(empty($_POST['s4']))
	{$c4 = '4. ? ';}
	else
	{$c4 = '4. - ';}

	

	if($_POST['s5']=='e')
	{$bal++; $c5 = '5. + ';}
	elseif(empty($_POST['s5']))
	{$c5 = '5. ? ';}
	else
	{$c5 = '5. - ';}


	echo'<h3>Netice</h3>';

	echo'<b>Baliniz: </b>'.$bal.'<br>';

	echo'<b>Cavablar: </b>'.$c1.$c2.$c3.$c4.$c5.'<br>';


}

?>

<br><br>
<form method="post">
	<b>1. En bahali mashin hansidir?</b><br>
	<input type="radio" name="s1" value="a"> A) LADA<br>
	<input type="radio" name="s1" value="b"> B) Ferrari<br>
	<input type="radio" name="s1" value="c"> C) Mercedes<br>
	<input type="radio" name="s1" value="d"> D) Toyota<br>
	<input type="radio" name="s1" value="e"> E) Hyundai<br><br>

	<b>2. En ucuz mashin hansidir?</b><br>
	<input type="radio" name="s2" value="a"> A) LADA<br>
	<input type="radio" name="s2" value="b"> B) Ferrari<br>
	<input type="radio" name="s2" value="c"> C) Mercedes<br>
	<input type="radio" name="s2" value="d"> D) Toyota<br>
	<input type="radio" name="s2" value="e"> E) Hyundai<br><br>

	<b>3. Hansi mashin Almaniya istehsalidir?</b><br>
	<input type="radio" name="s3" value="a"> A) LADA<br>
	<input type="radio" name="s3" value="b"> B) Ferrari<br>
	<input type="radio" name="s3" value="c"> C) Mercedes<br>
	<input type="radio" name="s3" value="d"> D) Toyota<br>
	<input type="radio" name="s3" value="e"> E) Hyundai<br><br>

	<b>4. Hansi mashin Yaponiya istehsalidir?</b><br>
	<input type="radio" name="s4" value="a"> A) LADA<br>
	<input type="radio" name="s4" value="b"> B) Ferrari<br>
	<input type="radio" name="s4" value="c"> C) Mercedes<br>
	<input type="radio" name="s4" value="d"> D) Toyota<br>
	<input type="radio" name="s4" value="e"> E) Hyundai<br><br>

	<b>5.  Hansi mashin Koreya istehsalidir?</b><br>
	<input type="radio" name="s5" value="a"> A) LADA<br>
	<input type="radio" name="s5" value="b"> B) Ferrari<br>
	<input type="radio" name="s5" value="c"> C) Mercedes<br>
	<input type="radio" name="s5" value="d"> D) Toyota<br>
	<input type="radio" name="s5" value="e"> E) Hyundai<br><br>

	<input type="submit" name="d" value="Imtahani bitir">
</form>