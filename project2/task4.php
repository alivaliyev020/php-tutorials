<?php

/*

1. Login: mehseti Parol: 12345 -> Xosh geldiniz
2. Eger login ve ya parol yanlishdirsa: Daxil etdiyiniz login ve ya parol yanlishdir
3. Eger login ve ya parol bosh buraxilibsa: Login ve ya parol daxil etmediniz


*/
if(isset($_POST['d']))
{
	if($_POST['login']=='mesheti' && $_POST['parol']=='12345')
		{echo'Xosh geldiniz';}

	elseif(!empty($_POST['login']) && $_POST['login']!='mesheti' && $_POST['parol']=='12345')
		{echo'Login yanlishdir';}

	elseif($_POST['login']=='mesheti' && !empty($_POST['parol']) && $_POST['parol']!='12345')
		{echo'Parol yanlishdir';}

	elseif(!empty($_POST['login']) && $_POST['login']!='mesheti' && !empty($_POST['parol']) &&  $_POST['parol']!='12345')
		{echo'Login ve parol yanlishdir';}

	elseif(empty($_POST['login']) && !empty($_POST['parol']))
		{echo'Login daxil etmediniz';}

	elseif(!empty($_POST['login']) && empty($_POST['parol']))
		{echo'Parol daxil etmediniz';}

	elseif(empty($_POST['login']) && empty($_POST['parol']))
		{echo'Login ve parol daxil etmediniz';}
}



?>
<br><br>
<form method= "post"> 
	Login:<br>
	<input type="text" name="login" autocomplete="off"><br>
	Parol:<br>
	<input type="text" name="parol"autocomplete="off"><br><br>
	<input type="submit" name="d" value="Daxil ol">
</form>
  
  
