<?php
	//untuk enkripsi
	include "./lib/function.php";
?>
<html>
<head>
	<title>Enkripsi URL</title>
</head>
<body>
<form action="proses.php?<?php echo paramEncrypt('nama=agus&blog=ri32')?>" method="post">
<table>
	<tr>
		<td>Email</td><td><input type="email"  name="email" size="33"/></td>
	</tr>
	<tr>
		<td>Pesan</td><td><textarea cols="25" rows="3" name="pesan"></textarea>
	</tr>
	<tr>
		<td><input type="submit" name="test" value="test" /></td><td></td>
	</tr>
</table>
<p><strong>Menu Link Terenkripsi :</strong></p>
<ul>
  <li><a href="?<?php echo paramEncrypt('page=menu_satu')?>" title="">Menu SATU</a></li>
  <li><a href="?<?php echo paramEncrypt('page=menu_dua')?>" title="">Menu DUA</a>.</li>
</ul>
</form>
</body>
</html>
<br>

<?php
	//untuk mendecode url yang di enrypsi
	$var=decode($_SERVER['REQUEST_URI']);

	//pecahkan nilai array
	$page=$var['page'];

	//concate dengan nama file
	$halaman="$page.php";

	//jika file yang diinclude tidak ada.
	if(!file_exists($halaman) || empty($page)){
		//include "welcome.php";
	}else{
		include "$halaman";
	}
?>
