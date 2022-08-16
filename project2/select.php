<?php

echo'Sizin ixtisasiniz: '.$_POST['x'].'<br>';


?>

<br><br>

<form method="post">
	Ixtisasiniz:<br>
	<select name="x">
		<option value="">Ixtisas secin</option>
		<option <?php if($_POST['x']=='muellim'){echo'selected';} ?> value="muellim">Muellim</option>
		<option <?php if($_POST['x']=='hekim'){echo'selected';} ?> value="hekim">Hekim</option>
		<option <?php if($_POST['x']=='muhendis'){echo'selected';} ?> value="muhendis">Muhendis</option>
		<option <?php if($_POST['x']=='vekil'){echo'selected';} ?> value="vekil">Vekil</option>
		<option <?php if($_POST['x']=='diger'){echo'selected';} ?> value="diger">Diger</option>
	</select>
	<br><br>
	<input type="submit" name="d" value="Ok">
</form>