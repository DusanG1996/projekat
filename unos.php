<?php
 if(isset($_POST['Unesi'])){
 if(($_POST['marka']!='')&&($_POST['model']!='')&&($_POST['godiste']!='')&&($_POST['cena']!='')){
 $marka=$_POST['marka'];
 $model=$_POST['model'];
 $slika=$_FILES['slika']['C:\Users\Licanin\Desktop'];
 if($slika){
	 echo 'Slika nije dodata';
 }
 $godiste=$_POST['godiste'];
 $cena=$_POST['cena'];
 $conn=mysqli_connect("localhost","root","","prodaja");
 $upit="insert into automobili(id,marka,model,slika,godiste,cena)  values(null,'$marka','$model','$slika',$godiste,$cena)";
 mysqli_query($conn,$upit);
 echo 'Uspesno ste dodali automobil<hr>';
 }
 }
 
 echo "<h2>Unesite automobil</h2>";
 echo "<form method='POST' action='' enctype='multipart/form-data' onsubmit='if(this.marka.value=='' || this.model.value=='' || this.slika.value=='' || this.godiste.value=='' || this.cena.value==''){ alert('Morate popuniti sva polja.');}>";
 echo "Marka: <input type='text' name='marka'><br>";
 echo "Model: <input type='text' name='model'><br>";
 echo "Slika: <input type='file' name='slika'><br>";
 echo "Godiste: <input type='number' name='godiste'><br>";
 echo "Cena: <input type='number' name='cena'>$<br>";
 echo "  <input type='submit' name='Unesi' value='Unesi'>";
 echo "</form>";
 
 
 
?>