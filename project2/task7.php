<h2>Saygac</h2>

<?php

//Saygac maksimum 10-a qeder artsin, 10-a catanda 10-da direnib durur
//Saygac minimum 0-a qeder dushur, 0-a catanda 0-da direnib durur

$i = 0;

if(isset($_POST['plus'] ) && $_POST['x'] < 10)
{
    $i = $_POST['x'] + 1;
}
if(isset($_POST['plus'] ) && $_POST['x'] == 10)
{
 $i = 10;
}

if(isset($_POST['minus']) && $_POST['x'] > 0)
{
	$i = $_POST['x'] - 1;
}
if(isset($_POST['minus']) && $_POST['x'] == 0)
{
	$i = 0;
}
echo $i;
?>


<br><br>
<form method="post">
	<input type="hidden" name="x" value="<?=$i ?>">
	<input type="submit" name="plus" value="+">
	<input type="submit" name="minus" value="-">
</form>