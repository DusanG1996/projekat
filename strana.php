<?php
	require_once "automobil.class.php";
	$automobil=new Automobil;
	$id=$_GET['id'];
	$conn=new mysqli("localhost","root","","prodaja");
	$upit="select * from automobili where id=$id";
	$niz=array();
	$rez=$conn->query($upit);
	$automobil=$rez->fetch_object('Automobil');
	$automobil->strana();
	
?>