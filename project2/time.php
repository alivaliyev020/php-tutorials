<?php

//1970-01-01 00:00:00 (UNIX) tarixinden indiki ana qeder olan muddeti saniyelerle geri qaytarir
$t1 = time();
//echo $t1;
//1970-01-01 00:00:00 (UNIX) tarixinden qeyd edilmish vaxta qeder olan muddeti saniyelerle geri qaytarir
$t2 = strtotime('2023-01-01 00:00:00');

$san = $t2 - $t1;
echo'Yeni ile <b>'.$san.'</b> saniye qalib<br>';

$deq = round($san/60);
echo'Yeni ile <b>'.$deq.'</b> deqiqe qalib<br>';

$saat = round($deq/60);
echo'Yeni ile <b>'.$saat.'</b> saat qalib<br>';

$gun = round($saat/24);
echo'Yeni ile <b>'.$gun.'</b> gun qalib<br>';


?>