<h2>Virtual printer</h2>

<form method="post">
	Metn:<br>
	<input type="text" name="metn"><br>
	Say:<br>
	<input type="text" name="say"><br><br>
	<input type="submit" name="d" value="Print">
</form>
<?php

//Minimum 1 eded cap mumkundur
//Maksimum 25 eded cap mumkundur
//Melumatlar tam deyil

if(isset($_POST['d']))	
{
	if (empty($_POST['say'] && $_POST['metn']))
	{	
		echo "Melumatlar tam deyil";
	}
	elseif ($_POST['say'] < 1) 
	{
       echo "Minimum 1 eded cap mumkundur";
	}
	elseif ($_POST['say'] >25) 
	{
		echo "Maksimum 25 eded cap mumkundur";
	}
	
	else {
	$i=0;
	while($i<$_POST['say'])
	{
		$i+=1;

		echo $i.'. '.$_POST['metn'].'<br>';
	}
    } 
}

?>




