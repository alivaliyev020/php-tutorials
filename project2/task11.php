<h2>Exchange</h2>

<?php 
error_reporting(0);

if (isset($_POST['d']) && !empty($_POST['mebleg'])) 
{
   
	if ($_POST['v1']== 'AZN' && $_POST['v2']== 'USD')
	{
	     $netice = $_POST['mebleg']/1.7;
	     $netice = $_POST['mebleg'].' AZN = '.$netice.' USD';

    }
    if($_POST['v1']== 'AZN' && $_POST['v2']== 'EUR')
    {
	     $netice = $_POST['mebleg']/1.89;
	     $netice = $_POST['mebleg'].' AZN = '.$netice.' EUR';

    }	
    if($_POST['v1']== 'USD' && $_POST['v2']== 'AZN')
    {
    	$netice = $_POST['mebleg']/0.58;
	    $netice = $_POST['mebleg'].' USD = '.$netice.' AZN';
    }	
    if($_POST['v1']== 'USD' && $_POST['v2']== 'EUR')
    {
    	$netice = $_POST['mebleg']/0.91;
	    $netice = $_POST['mebleg'].' USD = '.$netice.' EUR';
    }	
    if($_POST['v1']== 'EUR' && $_POST['v2']== 'AZN')
    {
        $netice = $_POST['mebleg']/0.53;
	    $netice = $_POST['mebleg'].' EUR = '.$netice.' AZN';
    }	
    if($_POST['v1']== 'EUR' && $_POST['v2']== 'USD')
    {
    	$netice = $_POST['mebleg']/1.11;
	    $netice = $_POST['mebleg'].' EUR = '.$netice.' USD';
    }	
     
    
}



?>

<form method="post">
	<input type="text" name="mebleg" placeholder="Mebleg..." size="5" value="<?= $_POST['mebleg'] ?>">
	<select name="v1">
		<option value="">Satiram</option>
		<option <?php if($_POST['v1'] == 'AZN'){echo 'selected';} ?> value="AZN">AZN</option>
		<option <?php if($_POST['v1'] == 'USD'){echo 'selected';} ?> value="USD">USD</option>
		<option <?php if($_POST['v1'] == 'EUR'){echo 'selected';} ?> value="EUR">EUR</option>
	</select>
	<select name="v2">
		<option value="">Aliram</option>
		<option <?php if($_POST['v2'] == 'AZN'){echo 'selected';} ?> value="AZN">AZN</option>
		<option <?php if($_POST['v2'] == 'USD'){echo 'selected';} ?> value="USD">USD</option>
		<option <?php if($_POST['v2'] == 'EUR'){echo 'selected';} ?> value="EUR">EUR</option>
	</select>
	<input type="submit" name="d" value="Ok">
</form>
<?=$netice ?>


