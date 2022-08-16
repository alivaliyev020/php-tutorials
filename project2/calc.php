<?php
error_reporting(0);
if(isset($_POST['d1']))
{
	$eded =  explode('+',$_POST['x']);

	if(count($eded)>1)
	{
		$i=0;
		while($i<count($eded))
		{
			$c = $eded[$i] + $c;
			$i++;
		}
	}

	
	$eded =  explode('-',$_POST['x']);

	if(count($eded)>1)
	{
		$i=0;
		while($i<count($eded))
	{		

		if ($i==0) 
		{
			$c = $eded[$i];
			$i++;
		}
		else
		{
			$c = $c - $eded[$i]; 
		    $i++;
		}	

	}
}


	$eded =  explode('*',$_POST['x']);

	if(count($eded)>1)
	{
		$i=0;
		while($i<count($eded))
	{		

		if ($i==0) 
		{
			$c = $eded[$i];
			$i++;
		}
		
		else
		{
			$c = $c * $eded[$i]; 
		    $i++;
		}	

	}
    }



	$eded =  explode('/',$_POST['x']);

	if(count($eded)>1)
	{
		$i=0;
		while($i<count($eded))
	{		

		if ($i==0) 
		{
			$c = $eded[$i];
			$i++;
		}

		else
		{
			if ($eded[$i] == 0) {
			   echo "0-a bolmek olmaz!";
			   break;
			}
			$c = $c / $eded[$i]; 
		    $i++;
		}	

	}
    }

}


?>





<form method="post">
	<textarea cols="22" rows="5" name="x"><?=$c ?></textarea><br>
	<input type="submit" name="d1" value="=">
	<input type="submit" name="d2" value="C">
</form>