<h2>AZN EXCHANGE</h2>

<form method="post">
	AZN mebleg:<br>
	<input type="text" name="azn", placeholder="<?=$_POST['azn'] ?>"> <br>
	<input type="submit" name="d1" value="USD">
	<input type="submit" name="d2" value="EUR">
	<input type="submit" name="d3" value="TL">
	<input type="submit" name="d4" value="ALL">
</form>

<?php
error_reporting(0);
if(isset($_POST["d1"]))
{
	$netice = $_POST['azn']/1.7;
	$netice = $_POST['azn'].' AZN = '.$netice.' USD';
}

if(isset($_POST["d2"]))
{
	$netice = $_POST['azn']/1.86;
	$netice = $_POST['azn'].' AZN = '.$netice.' EUR';
}


if(isset($_POST["d3"]))
{
	$netice = $_POST['azn']/0.11;
	$netice = $_POST['azn'].' AZN = '.$netice.' TL';
}

if (isset($_POST['d4'])) 
{
	$netice1 = $_POST['azn']/1.7;
	$netice2 = $_POST['azn']/1.86;
	$netice3 = $_POST['azn']/0.11;
	$netice = $_POST['azn'].' AZN = '.$netice1.' USD'."<br>".
    $_POST['azn'].' AZN = '.$netice2.' EUR'. "<br>".
    $_POST['azn'].' AZN = '.$netice3.' TL'
	;
}	



echo $netice;
?>
