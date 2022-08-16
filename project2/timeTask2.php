<h3>Dogum gunume ne qeder qalib</h3>
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

 if(isset($_POST['d']))
{

	$dogum = $_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'];
	$year = date('Y');
	$age = $year - $_POST['il'];

	$month = date('n');
	$day = date('j');

	if($month>$_POST['ay'] or $month==$_POST['ay'] && $day>$_POST['gun'])
    {
    	$il = date('Y') + 1;
    	$adgunu=$il.'-'.$_POST['ay'].'-'.$_POST['gun'];
    }
	else
	{$adgunu=date('Y').'-'.$_POST['ay'].'-'.$_POST['gun'];}
	

    
	$t1 =time();
    $t2=strtotime($adgunu);
	
	
    $san =$t2-$t1;
	$deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);

    echo'<b>Dogum tarixiniz: </b>'.$dogum.' <br>
         <b>Yashiniz: </b>'.$age.'<br>
     <b>Muddet: </b> Sizin dogum gununuze <b>'.$san.' </b> saniye, <b>'.$deq.' </b> deqiqe, 
	<b>'.$saat.'</b> saat,<b>'.$gun.'</b> gun qalib ve sizin <b>'.$age.'</b> yashiniz olacaq <br>';

    
}

?>