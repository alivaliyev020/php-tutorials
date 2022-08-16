<h2>Tarix araliqlari</h2>
<form method="post">
	Bashlangic tarix:<br>
	<input type="date" name="t1" value="<?=$_POST['t1'] ?>"><br>
	Son tarix:<br>
	<input type="date" name="t2" value="<?=$_POST['t2'] ?>"><br><br>

	<input type="radio" name="secim" value="san"> Saniye<br>
	<input type="radio" name="secim" value="deq"> Deqiqe<br>
	<input type="radio" name="secim" value="saat"> Saat<br>
	<input type="radio" name="secim" value="gun"> Gun<br>
	<input type="radio" name="secim" value="all"> Hamisi<br><br>

	<input type="submit" name="d" value="Ok">
</form>

<?php

if(isset($_POST['d']))
{  
	$t1=$_POST['t1'];
    $t2=$_POST['t2'];
    
   if($t1<$t2 && $_POST["secim"]=="san")
{    
	$t1 = strtotime($t1);
    $t2= strtotime($t2);
    $san = $t2 - $t1;
    echo'Secdiyiniz tarixler arasinda '.$san.' saniye var.<br>';}

   if($t1<$t2 && $_POST["secim"]=="deq")
{
    $t1 = strtotime($t1);
    $t2= strtotime($t2);
    $san = $t2 - $t1;
    $deq = round($san/60);

    echo'Secdiyiniz tarixler arasinda '.$deq.' deqiqe var.<br>';}

    if($t1<$t2 && $_POST["secim"]=="saat")
{
    $t1 = strtotime($t1);
    $t2= strtotime($t2);
    $san = $t2 - $t1;
    $deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);

    echo'Secdiyiniz tarixler arasinda '.$saat.' saat var.<br>';}


   if($t1<$t2 && $_POST["secim"]=="gun")
{
    $t1 = strtotime($t1);
    $t2= strtotime($t2);
    $san = $t2 - $t1;
    $deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);

    echo'Secdiyiniz tarixler arasinda '.$gun.' gun var.<br>';}

    if($t1<$t2 && $_POST["secim"]=="all")
{
    $t1 = strtotime($t1);
    $t2= strtotime($t2);
    $san = $t2 - $t1;
    $deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);
    
    echo'Secdiyiniz tarixler arasinda '.$san.' saniye,'.$deq.' deqiqe,'.$saat.' saat,'.$gun.' gun var.<br>';}

     if($t1>$t2)
     { echo 'Baslangic tarix son tarixden boyuk ola bilmez.';}

}

?>








