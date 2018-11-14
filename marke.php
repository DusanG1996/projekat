<?php
	$conn=mysqli_connect('localhost','root','','prodaja');
	$upit="select marka from automobili";
	$rez=mysqli_query($conn,$upit);
	while($clan=mysqli_fetch_assoc($rez)){
		$niz[]=$clan;
	}
	foreach($niz as $elem)
		foreach($elem as $k=>$v)
			$podniz[]=$v;
	$marke=array();
	foreach($podniz as $elem){
		if(in_array($elem,$marke)==0)
			$marke[]=$elem;
	}
	//print_r($marke);
	
?>