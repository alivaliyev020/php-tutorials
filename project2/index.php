<?php
$con = mysqli_connect('localhost','mesheti','12345','ilk_baza');

echo'<h2>Dost v1</h2>';
echo'<a href="insert.php">Yeni dost</a>';
echo'<h3>Dost siyahisi</h3>';

echo'
<form method="post">
	<input type="text" name="sorgu">
	<input type="submit" name="axtar" value="Axtar">
	<input type="submit" name="all" value="Hamisi">
</form>';

//Axtardiginiz sorgu uzre hec bir melumat tapilmadi

if(isset($_POST['axtar']) && !empty($_POST['sorgu']))
{$axtar = " WHERE ad='".$_POST['sorgu']."' OR soyad='".$_POST['sorgu']."' ";}
else
{$axtar = "";}

//ORDER BY sutun_adi ASC/DESC  A-Z/0-9 Z-A/9-0
//Cedveli ve sutunlari secir
$sec = mysqli_query($con,"SELECT ad,soyad,tel,tarix FROM dost ".$axtar." ORDER BY id DESC");
//SELECT-de edilmish sorguya esasen setirleri sayir
$say = mysqli_num_rows($sec);

echo'Bazada <b>'.$say.'</b> dost var<br><br>';

$i = 0;

while($info = mysqli_fetch_array($sec))
{
	$i++;

	echo'#'.$i.'<br>';
	echo'<b>Dost: </b>'.$info['ad'].' '.$info['soyad'].'<br>';
	echo'<b>Telefon: </b>'.$info['tel'].'<br>';
	echo'<b>Tarix: </b>'.$info['tarix'].'<br><br>';
}

