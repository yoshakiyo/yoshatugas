<?php
	include "koneksi.php";

	// $a=$_POST['nama_kub']
	// $b=$_POST['no_regestrasi'];
	// $c=$_POST['jml_anggota']
	// $d=$_POST['register_tahun']
	// $e=$_POST['id']
	// $f=$_POST['alamat']
	mysql_query("UPDATE kelompok SET nama_kub='$_POST[nama]',no_regestrasi='$_POST[no]',alamat='$_POST[alamat]',jml_anggota='$_POST[jumlah]',register_tahun='$_POST[tahun]' where id='$_POST[id]'");
	// header("location=admin.php");
	$daerah = $_POST['daerah'];
	echo "<script> location.href='admin.php?daerah=".$daerah."' </script>";
?>