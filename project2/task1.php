<?php

$cavab = '';

if(isset($_POST['d1']))
{$cavab = $_POST['e1'] + $_POST['e2'];}

if(isset($_POST['d2']))
{$cavab = $_POST['e1'] - $_POST['e2'];}

if(isset($_POST['d3']))
{$cavab = $_POST['e1'] * $_POST['e2'];}

if(isset($_POST['d4']))
{$cavab = $_POST['e1'] / $_POST['e2'];}

?>




<form method="post">
	<input type="text" name="e1" size="5" autocomplete="off" placeholder="<?=$_POST['e1'] ?>">
	<input type="text" name="e2" size="5" autocomplete="off" placeholder="<?=$_POST['e2'] ?>">
	<input type="submit" name="d1" value="+">
	<input type="submit" name="d2" value="-">
	<input type="submit" name="d3" value="*">
	<input type="submit" name="d4" value="/">
	= <?=$cavab ?>
</form>












