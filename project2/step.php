<h2>Orduya destek fondu</h2>

<?php

//ad/soyad -> (vezife/maash) -> bank/mebleg -> TESHEKKUR
//Derhal TESHEKKUR mesaji gelmesin:
//Eger mebleg kicikdirse 10 AZN: Minimum destek 10 AZN olmalidir
//Eger mebleg boyukdurse 500 AZN: Maksimum mebleg 500 AZN olmalidir
//Eger mebleg 10-500 AZN araligindadirsa: TESHEKKUR mesaji

if(!isset($_POST['d1']) && !isset($_POST['d2']) && !isset($_POST['d3']))
{
	echo'
	<form method="post">
		Adiniz:<br>
		<input type="text" name="ad"><br>
		Soyadiniz:<br>
		<input type="text" name="soyad"><br><br>
		<input type="submit" name="d1" value=" Ireli">

	</form>';
}

if(isset($_POST['d1']))
{
	echo '
	<form method="post">
	   Vezifeniz:<br>
	  <input type="text" name="vezifeniz"><br>
	  Ayliq geliriniz:<br>
	  <input type="text" name="ayliq geliriniz"><br>
	  <input type="submit" name="d2" value="ireli">

	<form>';
}

if(isset($_POST['d2']))
{
	echo'
	<form method="post">
		Bank hesabi:<br>
		<input type="text" name="bank"><br>
		Mebleg:<br>
		<input type="text" name="mebleg"><br><br>
		<input type="submit" name="d3" value="Ireli">
	</form>';
}

if(isset($_POST['d3']))
{

	if($_POST['mebleg']<10)
	{echo 'Minimum destek 10 Azn olmalidir';}
	elseif ($_POST['mebleg']> 500)
	{echo 'Maksimum mebleg 500 Azn olmalidir';}
	else 
	{echo'Teshekkur edirik! Sizin <b>'.$_POST['mebleg'].' AZN</b> desteyiniz qebul edildi';}
}

?>



