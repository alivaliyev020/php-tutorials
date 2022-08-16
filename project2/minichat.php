<h2>Mini Chat</h2>
<?php
error_reporting(0);
//n --ay 0 siz
//j--gun0 siz

$tarix=date('Y-m-d H:i:s');
echo $tarix;
echo "<br><br>";
if (isset($_POST['d'])) 
{
	$mesajlar = '<b>'.$_POST['ad']." ".$_POST['soyad'].'</b><br>'.$_POST['mesaj'].'<br><br>'.$tarix.'<br><br>'.$_POST['baza'];
}

 ?>
 <form method="post">
  adiniz:<br>
  <input type="text" name="ad" placeholder="ad daxil edin:"><br><br>
  soyadiniz:<br>
  <input type =text name="soyad" placeholder="soyad daxil edin:"><br><br>
  metn:<br>
  <textarea cols= 22 rows= 6 name="mesaj" placeholder="Mesajinizi bura yazin!!"></textarea><br><br>
  <input type="hidden" name="baza" value="<?=$mesajlar ?>">
  <input type="submit" name="d" value="gonder">

 </form>
 <?=$mesajlar ?>
