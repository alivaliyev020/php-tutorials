<?php

/*

- Eger RADIO-larin NAME-leri eyni olarsa buna RADIOGROUP deyilir
- RADIOGROUP daxilinde yalniz 1 secim etmek mumkundur
- RADIO-lar yalniz VALUE daxilindeki melumatlari oturur

*/

echo'Sizin cinsiniz: '.$_POST['cins'].'<br><br>';

if($_POST['cins']=='kishi')
{echo'Salam bey';}

if($_POST['cins']=='qadin')
{echo'Xosh gorduk xanim';}

?>


<br><br>
<form method="post">
	Cinsiniz:<br>
	<input type="radio" name="cins" value="kishi"> Kishi
	<input type="radio" name="cins" value="qadin"> Qadin
	<br><br>
	<input type="submit" name="d" value="Ok">
</form>