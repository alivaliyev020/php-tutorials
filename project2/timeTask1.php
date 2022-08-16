<h3>Heyatda ne qeder<br>muddetdir ki movcudam</h3>
<form method="post">
	Dogum tarixiniz:<br>
	<select name="il">
		<option value="">il</option>
		<?php

		$i = 1974;

		while($i<2022)
		{	
			$i++; 
			if($i==$_POST['il']){$x='selected';}else{$x='';}
			echo'<option '.$x.' value="'.$i.'">'.$i.'</option>';
		}

		?>
	</select>
	<select name="ay">
		<option value="">ay</option>
		<?php
		
		$i = 0;

		while($i<12)
		{
			$i++; 
			if($i==$_POST['ay']){$x='selected';}else{$x='';}
			echo'<option '.$x.' value="'.$i.'">'.$i.'</option>';
		}

		?>
	</select>
	<select name="gun">
		<option value="">gun</option>
		<?php
		
		$i = 0;

		while($i<31)
		{
			$i++; 
			if($i==$_POST['gun']){$x='selected';}else{$x='';}
			echo'<option '.$x.' value="'.$i.'">'.$i.'</option>';
		}

		?>
	</select>
	<br><br>
	<input type="submit" name="d"  value="Hesabla">
</form>

  <?php
//<b>Dogum tarixiniz: </b>1995-05-14 <br>
//<b>Yashiniz: </b>28 <br>
//<b>Muddet: </b> Siz heyatda <b>xxxx</b> saniye, <b>xxxx</b> deqiqe, <b>xxxx</b> saat, <b>xxxx</b> gundur ki movcudsunuz <br>

if(isset($_POST['d']))
{
	$dogum = $_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'];
	echo'<b>Dogum tarixiniz: </b>'.$dogum.' <br>';

	$year = date('Y');
	$age = $year - $_POST['il'];
	echo'<b>Yashiniz: </b>'.$age.'<br>';

	$t1 = strtotime('now');
	$t2 = strtotime($dogum);

	$san = $t1 - $t2;
	$deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);

	echo'<b>Muddet: </b> Siz heyatda <b>'.$san.'</b> saniye, <b>'.$deq.'</b> deqiqe, <b>'.$saat.'</b> saat, <b>'.$gun.'</b> gundur ki movcudsunuz <br>';


}

?>













