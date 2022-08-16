<h2>Ad baza</h2>


<?php
error_reporting(0);

//Bosh melumat gonderildikde ekrana cixan adlar qalmaq sherti ile hec bir sheey bash vermesin
//Maksim 5 ad daxil etmek mumkundur:
$sira = 0;
if (isset($_POST['d']) && !empty($_POST['ad']) && $_POST['sira'] <=5)
{
	$sira = $_POST['sira'] + 1;
	$adlar = $_POST['baza'].$sira.'. '.$_POST['ad'].'<br>'; 
}
elseif (isset($_POST['d']) && empty($_POST['ad']) || $_POST['sira'] >= 5 ) 
{
	$sira = $_POST['sira'];
	$adlar = $_POST['baza'];
	if ($_POST['sira'] >= 5) {
	 echo 'maksimum 5 ad daxil etmek mumkundur <br><br>';
	}
}


?>

<form method="post">
	Ad daxil edin:<br>
	<input type="hidden" name="sira" value="<?=$sira ?>">
	<input type="hidden" name="baza" value="<?=$adlar ?>">
	<input type="text" name="ad"><br><br>
	<input type="submit" name="d" value="Daxil et">
</form>
<?=$adlar ?>

