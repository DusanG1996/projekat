<?php
	require_once "automobil.class.php";
	require_once "marke.php";
	//echo "<header style='width:50%;background:aqua;position:fixed;height:10%;text-align:center;'>Pretraga<header>";
	//$niz=array('Odaberite marku','Audi','Ford','Mercedes','Volkswagen','BMW','Peugeot','Skoda');
	echo "<form method='POST' action='prodaja1.php' >
	Marka:<select name='marka'><option>Odaberite marku</option>";foreach($marke as $marka)
					echo "<option>$marka</option>";
					echo "</select>";
	echo "     Cena: od <input type='number' name='cenaOd'>$	do <input type='number' name='cenaDo'>$";
	echo "     Godiste: od  <input type='number' name='godisteOd'>	do <input type='number' name='godisteDo'>";
	echo "  <input type='submit' value='Pretrazi'>";
	echo "</form>";
	/*if (isset($_POST['marka']))$marka=$_POST['marka'];
	else $marka="Volkswagen";
	if ($_POST['cenaOd']!='')$cenaOd=$_POST['cenaOd'];
	else $cenaOd=0;
	if ($_POST['cenaDo']!='') $cenaDo=$_POST['cenaDo'];
	else $cenaDo=200000;
	if ($_POST['godisteOd']!='') $godisteOd=$_POST['godisteOd'];
	else $godisteOd=0;
	if ($_POST['godisteDo']!='') $godisteDo=$_POST['godisteDo'];
	else $godisteDo=2050;
	 //echo "Izabrali ste $marka $model <br>";*/
	$conn=new mysqli("localhost","root","","prodaja");
	$upit="select * from automobili";
	$niz=array();
	$rez=$conn->query($upit);
	while($x=$rez->fetch_object('Automobil')){
		$niz[]=$x;
	}
	foreach($niz as $automobil){
		$automobil->prikaz();
	}
	
?>