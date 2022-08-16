<h2>Vurma cedveli</h2>

<form method="post">
	Eded daxil edin:<br>
	<input type="text" name="eded"><br><br>
	<input type="submit" name="d" value="Yarat">
	<input type="submit" name="all" value="Hamisi">
</form>
<?php
error_reporting(0);
if (isset($_POST['all']) && !empty($_POST['eded'])) 
{
	for ($i=2; $i <=10 ; $i++)
	{ 
		echo "<hr>";
		for ($a=1; $a <=10 ; $a++) 
		{ 
			echo $i."*".$a."=".$i*$a ."<br>";
		}
	}
}
if (isset($_POST['d']) && !empty($_POST['eded']))
{
	for ($i=1; $i <=10 ; $i++) 
	{ 
				echo $i."*".$_POST['eded']."=".$i*$_POST['eded'].'<br>';
	}
}

?>



Maksimum 1-10 araliginda ededler daxil etmek mumkundur
Eger biz hamisi duymesini sixiriqsa proqram bize 1-den 10-a qeder butun ededlerin vurma cedvelini qaytarir:
1*1=1
1*2=2
...
1*10=10

2*1=2
2*2=

d duymesi -> Yalniz 1ce defe dovr
all duymesi yalniz 2ce defe dovr