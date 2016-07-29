<?php
	//untuk enkripsi
	include "./lib/function.php";
	
	//untuk mendecode url yang di enrypsi
	$var=decode($_SERVER['REQUEST_URI']);
	
	//pecahkan nilai array
	echo "<b>Nilai diambil dari parameter GET (ter enkripsi) : </b>";
	echo "<br>";
	echo "Nama : ".$var['nama'];
	echo "<br>";
	echo "Blog : ".$var['blog'];
	echo "<br>";
	
	echo "<b>Nilai diambil dari parameter POST : </b>";
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['pesan'];
?>
