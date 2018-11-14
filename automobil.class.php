<?php
	class Automobil{
		public $id;
		private $marka;
		private $model;
		private $slika;
		private $godiste;
		private $cena;
		function strana(){
			echo "<div>
		<h1>$this->marka  $this->model</h1>
		<img src='$this->slika' height='500px' width='800px'>
		<p>Godiste:$this->godiste<br>Cena:$this->cena$</p>
	</div>";
		}
		function prikaz(){
			echo "<a href='strana.php?id=$this->id'>";
			echo "<div style='width:250px;height:300px;border:7px solid blue;margin:15px;float:left;display:block;cursor: grab;padding:10px; margin:10px;  '>
		 <h3 style='text-align:center'>$this->marka  $this->model</h3>
		 <img style='width:250px;height:180px;' src='$this->slika' alt='Nema slike'>
		<p>Godiste:$this->godiste<br>Cena:$this->cena$</p>
		</div></a>";
		}
	}
?>