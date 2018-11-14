<?php
	require_once "automobil.class.php";
	require_once "marke.php";
	session_start();
	//echo "<header style='width:50%;background:aqua;position:fixed;height:10%;text-align:center;'>Pretraga<header>";
	$niz=array('Odaberite marku','Audi','Ford','Mercedes','Volkswagen','BMW','Peugeot','Skoda');
	echo "<form method='POST' action='prodaja1.php' >
	Marka:<select name='marka'><option>{$_POST['marka']}</option>";foreach($marke as $marka)if($_POST['marka']!=$marka){
			echo "<option>$marka</option>";}
			echo "</select>";
	echo "     Cena: od <input type='number' name='cenaOd' value='{$_POST['cenaOd']}'>$	do <input type='number' name='cenaDo' value='{$_POST['cenaDo']}'>$";
	echo "     Godiste: od  <input type='number' name='godisteOd' value='{$_POST['godisteOd']}'>	do <input type='number' name='godisteDo' value='{$_POST['godisteDo']}'>";
	echo "  <input type='submit' value='Pretrazi'>";
	echo "</form>";
	if (isset($_POST['marka']))$marka=$_POST['marka'];
	else $marka="Volkswagen";
	if ($_POST['cenaOd']!=''){
		$cenaOd=$_POST['cenaOd'];
		$co="cena>$cenaOd";
	}else $co='1';
	if ($_POST['cenaDo']!=''){ 
		$cenaDo=$_POST['cenaDo'];
		$cd="cena<$cenaDo";
	}else $cd='1';
	if ($_POST['godisteOd']!=''){ 
		$godisteOd=$_POST['godisteOd'];
	}else $godisteOd=0;
	if ($_POST['godisteDo']!='') $godisteDo=$_POST['godisteDo'];
	else $godisteDo=2050;
	 //echo "Izabrali ste $marka $model <br>";
	$conn=new mysqli("localhost","root","","prodaja");
	if ($marka!="Odaberite marku"){
	$upit="select * from automobili where marka='$marka'   && $co && $cd && godiste>$godisteOd && godiste<$godisteDo ";
	}else{
		$upit="select * from automobili where $co && $cd && godiste>$godisteOd && godiste<$godisteDo ";
	}
	$niz=array();
	$rez=$conn->query($upit);
	while($x=$rez->fetch_object('Automobil')){
		$niz[]=$x;
	}
	foreach($niz as $automobil){
		$automobil->prikaz();
	}
	
?>