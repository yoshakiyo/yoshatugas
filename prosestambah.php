<?php
	include "koneksi.php";

	$a=$_POST['daerah'];
	$b=$_POST['nama'];
	$c=$_POST['no'];
	$d=$_POST['alamat'];
	$e=$_POST['jumlah'];
	$f=$_POST['tahun'];

	mysql_query("INSERT INTO kelompok (id,kode_daerah,nama_kub,no_regestrasi,alamat,jml_anggota,register_tahun) VALUES ('','$a','$b','$c','$d','$e','$f')");
	$daerah = $_POST['daerah'];
	echo "<script> location.href='admin.php?daerah=".$daerah."' </script>";
	
?>