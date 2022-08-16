<h2>MiniChat</h2>
<?php
error_reporting(0);

//Eger her hansi bir sahe bosh gonderilerse en sonuncu mesajlar itmemek sherti ile proqram yerindece durub qalir
//n - ay 0-siz
//j - gun 0-siz
$tarix = date('Y-m-d H:i:s');

if(isset($_POST['d']) && !empty($_POST['ad']) && !empty($_POST['soyad']) && !empty($_POST['mesaj']))
{
    $mesajlar = '<b>'.$_POST['ad'].' '.$_POST['soyad'].'</b><br>'.$_POST['mesaj'].'<br>'.$tarix.'<br><br>'.$_POST['baza'];
}
else
{
	$mesajlar = $_POST['baza'];
}

?>

<form method="post">
	Adiniz:<br>
	<input type="text" name="ad"><br>
	Soyadiniz:<br>
	<input type="text" name="soyad"><br>
	Mesaj:<br>
	<textarea cols="22" rows="5" name="mesaj"></textarea><br><br>
	<input type="hidden" name="baza" value="<?=$mesajlar ?>">
	<input type="submit" name="d" value="Gonder">
</form>
<?=$mesajlar ?>



