<h2>Orduya destek fondu</h2>

<?php
error_reporting(0);
//Destek maashdan boyuk ola bilmez

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
	  <input type="text" name="vezife"><br>
	  Ayliq geliriniz:<br>
	  <input type="text" name="maash"><br><br>
	  <input type="hidden" name="ad" value="'.$_POST['ad'].'">
	  <input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
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
		<input type="hidden" name="ad" value="'.$_POST['ad'].'">
	  	<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		<input type="submit" name="d3" value="Ireli">
		<input type="hidden"  name="maash" value="'.$_POST['maash'].'"
	</form>';
}

if(isset($_POST['d3']))
{

	if($_POST['mebleg']<10)
	{echo 'Minimum destek 10 Azn olmalidir';}
	elseif ($_POST['mebleg']> 500)
	{echo 'Maksimum mebleg 500 Azn olmalidir';}
    elseif ($_POST['maash'] < $_POST['mebleg']) 
    	{echo 'Maashiniz yeterli deyil';}
	else 
	{echo'Teshekkur edirik <b>'.$_POST['ad'].' '.$_POST['soyad'].'</b>! Sizin <b>'.$_POST['mebleg'].' AZN</b> desteyiniz qebul edildi';}

}

?>



