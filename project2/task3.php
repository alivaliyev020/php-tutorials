<h2>Kimdir</h2>

<?php
 error_reporting(0);
 $ad = $_POST["ad"];
if($ad == "Nahid"){echo $ad." Emi ogludur";}
elseif($ad =="Turab"){echo $ad." Bibi ogludur";}
elseif($ad =="Tebriz"){echo $ad."Qardashdir";}
elseif($ad =="Seide"){echo $ad."Yaxin refiqedir";}
elseif($ad == "") {echo "Siz ad daxil etmediniz";}
else {echo $ad." kimdir men onu tanimadim";}
/*

Nahid -> Emi ogludur
Turab -> Bibi ogludur
Tebriz -> Qardashdir
Seide -> Yaxin refiqedir
Siyahida olmayan ad -> Filankes kimdir? Men onu tanimadim
Boshluq -> siz ad daxil etmediniz

*/


?>

<br><br>
<form method="post">
	Ad daxil edin:<br>
	<input type="text" name="ad"><br><br>
	<input type="submit" name="d" value="Kimdir">
</form>