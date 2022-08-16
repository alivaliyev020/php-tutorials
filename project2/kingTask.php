<h2>To Do List</h2>

<?php

if(isset($_POST['add']))
{   
   
   
   	$task=$_POST['task'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	
	$from = time();
	$to = $date.' '.$time.':00';
    $to = strtotime($to);

    $san = $to - $from;
	$deq = round($san/60);
	$saat = round($deq/60);
	$gun = round($saat/24);

	if($deq<59 && $deq>0)
	{$qaliq = $deq.' deqiqe';}
	elseif($deq>59 && $saat<24)
	{$qaliq = $saat.' saat';}
	elseif($saat>24)
	{$qaliq = $gun.' gun';}
	else
	{$qaliq = 'Tamamdir';}



    $qeydler='
    <b>Tapshiriq:</b>'.$task. '<br>
    <b>Tarix:</b>'.$date.'<br>
    <b>Vaxt:</b>'.$time.'<br>
    <b>Qaliq: </b>'.$qaliq.'<br><br>
    '.$_POST['baza'];

   

}
?>


<form method="post">
	Tapshiriq:<br>
	<input type="text" name="task"><br>
	Tarix:<br>
	<input type="date" name="date"><br>
	Vaxt:<br>
	<input type="time" name="time"><br><br>
	<input type="hidden" name="baza" value="<?=$qeydler ?>">
	<input type="submit" name="add" value="Add">
</form>

<?=$qeydler ?>
