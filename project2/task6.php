<h2>Orduya destek fondu</h2>

<?php

//Eger bosh melumat gonderilerse proqram ireli getmesin, sadece yerinde direnib dursun

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
	if(empty($_POST['soyad']) && empty($_POST['ad']))
	{ 

			echo'
			Ad ve Soyad daxil edin:
		<form method="post">
			Adiniz:<br>
			<input type="text" name="ad"><br>
			Soyadiniz:<br>
			<input type="text" name="soyad"><br><br>
			<input type="submit" name="d1" value=" Ireli">

		</form>';
	}
	elseif(empty($_POST['ad']))
	{ 

			echo'
			Ad daxil edin:
		<form method="post">
			Adiniz:<br>
			<input type="text" name="ad"><br>
			Soyadiniz:<br>
			<input type="text" name="soyad"><br><br>
			<input type="submit" name="d1" value=" Ireli">

		</form>';
	}
	elseif(empty($_POST['soyad']))
	{ 

			echo'
			Soyad daxil edin:
		<form method="post">
			Adiniz:<br>
			<input type="text" name="ad"><br>
			Soyadiniz:<br>
			<input type="text" name="soyad"><br><br>
			<input type="submit" name="d1" value=" Ireli">

		</form>';
	}	
	
	else
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
	</form>';
}

if(isset($_POST['d3']))
{

	if($_POST['mebleg']<10)
	{echo 'Minimum destek 10 Azn olmalidir';}
	elseif ($_POST['mebleg']> 500)
	{echo 'Maksimum mebleg 500 Azn olmalidir';}
	else 
	{echo'Teshekkur edirik <b>'.$_POST['ad'].' '.$_POST['soyad'].'</b>! Sizin <b>'.$_POST['mebleg'].' AZN</b> desteyiniz qebul edildi';}
}

?>



