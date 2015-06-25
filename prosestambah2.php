<?php
	include "koneksi.php";

	$a=$_POST['nama'];
	$c=$_POST['kelompok'];
	$d=$_POST['ktp'];
	$e=$_POST['kartu'];
	$f=$_POST['lahir'];
	$g=$_POST['kelamin'];
	$h=$_POST['alamat'];
	$i=$_POST['kota'];
	$j=$_POST['telpon'];
	$k=$_POST['jabatan'];

	mysql_query("INSERT INTO nelayan (id_nelayan,id,no_ktp,nama_nelayan,no_kartu_nelayan,tgl_lahir,jenis_kelamin,alamat,kota,no_telpon,jabatan) VALUES ('','$c','$d','$a','$e','$f','$g','$h','$i','$j','$k')");
	$daerah = $_POST['daerah'];
	echo "<script> location.href='admin.php?daerah=".$daerah."' </script>";
	
?>