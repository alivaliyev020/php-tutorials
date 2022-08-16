<h2>Saygac</h2>

<?php

$i = 0;

if(isset($_POST['plus']))
{$i = $_POST['x'] + 1;}

if(isset($_POST['minus']))
{$i = $_POST['x'] - 1;}

echo $i;
?>


<br><br>
<form method="post">
	<input type="hidden" name="x" value="<?=$i ?>">
	<input type="submit" name="plus" value="+">
	<input type="submit" name="minus" value="-">
</form>