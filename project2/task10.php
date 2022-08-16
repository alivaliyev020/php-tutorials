<h2>Canli sinaq</h2>

<?php 

if(empty($_POST['ad']) or empty($_POST['soyad']) or empty($_POST['kod']))
{
	echo 
      '<form method="post">
	      Adiniz:<br>
	      <input type="text" name="ad"><br>
	      Soyadiniz:<br>
	      <input type="text" name="soyad"><br>
	      Kodunuz:<br>
	      <input type="text" name="kod"><br><br>
	      <input type="submit" name="d" value="Daxil ol">
       </form> ';
}



if(isset($_POST['d']) && !empty($_POST['ad']) && !empty($_POST['soyad']) && !empty($_POST['kod']))
{ 
	echo    
  '<form method="post">
		<b>1. En bahali mashin hansidir?</b><br>
		<input type="radio" name="s1" value="a"> A) LADA<br>
		<input type="radio" name="s1" value="b"> B) Ferrari<br>
		<input type="radio" name="s1" value="c"> C) Mercedes<br>
		<input type="radio" name="s1" value="d"> D) Toyota<br>
		<input type="radio" name="s1" value="e"> E) Hyundai<br><br>
	    <input type="hidden" name="ad" value="'.$_POST['ad'].'">
	    <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
	    <input type="hidden" name="kod" value="'.$_POST['kod'].'">

		<input type="submit" name="d1" value="Ireli">
	</form>';
}

if(isset($_POST['d1']))
{
	echo
	'<form method="post">
		<b>2. En ucuz mashin hansidir?</b><br>
		<input type="radio" name="s2" value="a"> A) LADA<br>
		<input type="radio" name="s2" value="b"> B) Ferrari<br>
		<input type="radio" name="s2" value="c"> C) Mercedes<br>
		<input type="radio" name="s2" value="d"> D) Toyota<br>
		<input type="radio" name="s2" value="e"> E) Hyundai<br><br>
	        <input type="hidden" name="ad" value="'.$_POST['ad'].'">
		    <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		    <input type="hidden" name="kod" value="'.$_POST['kod'].'">
		    <input type="hidden" name="s1" value="'.$_POST['s1'].'">

		<input type="submit" name="d2" value="Ireli">
	</form>';
}

if(isset($_POST['d2']))

{
	echo
	'<form method="post">
		<b>3. Hansi mashin Almaniya istehsalidir?</b><br>
		<input type="radio" name="s3" value="a"> A) LADA<br>
		<input type="radio" name="s3" value="b"> B) Ferrari<br>
		<input type="radio" name="s3" value="c"> C) Mercedes<br>
		<input type="radio" name="s3" value="d"> D) Toyota<br>
		<input type="radio" name="s3" value="e"> E) Hyundai<br><br>
	        <input type="hidden" name="ad" value="'.$_POST['ad'].'">
		    <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		    <input type="hidden" name="kod" value="'.$_POST['kod'].'">
		    <input type="hidden" name="s1" value="'.$_POST['s1'].'">
		    <input type="hidden" name="s2" value="'.$_POST['s2'].'">

	    <input type="submit" name="d3" value="Ireli">
	</form>';
}

if(isset($_POST['d3']))

{
	echo
	'<form method="post">
	    <b>4. Hansi mashin Yaponiya istehsalidir?</b><br>
		<input type="radio" name="s4" value="a"> A) LADA<br>
		<input type="radio" name="s4" value="b"> B) Ferrari<br>
		<input type="radio" name="s4" value="c"> C) Mercedes<br>
		<input type="radio" name="s4" value="d"> D) Toyota<br>
		<input type="radio" name="s4" value="e"> E) Hyundai<br><br>
		    <input type="hidden" name="ad" value="'.$_POST['ad'].'">
		    <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		    <input type="hidden" name="kod" value="'.$_POST['kod'].'">
		    <input type="hidden" name="s1" value="'.$_POST['s1'].'">
		    <input type="hidden" name="s2" value="'.$_POST['s2'].'">
		    <input type="hidden" name="s3" value="'.$_POST['s3'].'">

		<input type="submit" name="d4" value="Ireli">
	</form>';


}

if(isset($_POST['d4']))

{
	echo
	'<form method="post">
		<b>5.  Hansi mashin Koreya istehsalidir?</b><br>
		<input type="radio" name="s5" value="a"> A) LADA<br>
		<input type="radio" name="s5" value="b"> B) Ferrari<br>
		<input type="radio" name="s5" value="c"> C) Mercedes<br>
		<input type="radio" name="s5" value="d"> D) Toyota<br>
		<input type="radio" name="s5" value="e"> E) Hyundai<br><br>
	        <input type="hidden" name="ad" value="'.$_POST['ad'].'">
		    <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		    <input type="hidden" name="kod" value="'.$_POST['kod'].'">
		    <input type="hidden" name="s1" value="'.$_POST['s1'].'">
		    <input type="hidden" name="s2" value="'.$_POST['s2'].'">
		    <input type="hidden" name="s3" value="'.$_POST['s3'].'">
		    <input type="hidden" name="s4" value="'.$_POST['s4'].'">

		<input type="submit" name="d5" value="Imtahani bitir">
	</form>';
}


if(isset($_POST['d5']))
{

//<h3>Netice</h3>
//<b>Imtahan veren: </b> Fuad Aliyev<br>
//<b>Kod: </b> 12345<br>
//<b>Bal: </b> 3<br>
//<b>Duzgun: </b> 3<br>
//<b>Sehv: </b> 1<br>
//<b>Yazmayib: </b> 1<br>
//<b>Cavablar: </b> 1. + 2. ? 3. - 4. + 5. +

	$bal = 0;
	$sehv = 0;
	$bosh = 0;

	if($_POST['s1']=='b')
	{$bal++; $c1 = '1. + ';}
	elseif(empty($_POST['s1']))
	{$bosh++; $c1 = '1. ? ';}
	else
	{$sehv++; $c1 = '1. - ';}

	

	if($_POST['s2']=='a')
	{$bal++; $c2 = '2. + ';}
	elseif(empty($_POST['s2']))
	{$bosh++; $c2 = '2. ? ';}
	else
	{$sehv++; $c2 = '2. - ';}


	

	if($_POST['s3']=='c')
	{$bal++; $c3 = '3. + ';}
	elseif(empty($_POST['s3']))
	{$bosh++; $c3 = '3. ? ';}
	else
	{$sehv++; $c3 = '3. - ';}


	
	if($_POST['s4']=='d')
	{$bal++; $c4 = '4. + ';}
	elseif(empty($_POST['s4']))
	{$bosh++; $c4 = '4. ? ';}
	else
	{$sehv++; $c4 = '4. - ';}

	

	if($_POST['s5']=='e')
	{$bal++; $c5 = '5. + ';}	
	elseif(empty($_POST['s5']))
	{$bosh++; $c5 = '5. ? ';}
	else
	{$sehv++; $c5 = '5. - ';}


	echo'<h3>Netice</h3>';

	echo'<b>Imtahan veren: </b> '.$_POST['ad'].' '.$_POST['soyad'].'<br>';

	echo'<b>Kod: </b> '.$_POST['kod'].'<br>';

	echo'<b>Baliniz: </b>'.$bal.'<br>';

	echo '<b>Sehv Cavablar: </b>'.$sehv.'<br>';
	
	echo '<b>Bosh Cavablar: </b>'.$bosh.'<br>';

	echo'<b>Cavablar: </b>'.$c1.$c2.$c3.$c4.$c5.'<br>';
}