<?php
	include "koneksi.php";

	// $a=$_POST['nama_kub']
	// $b=$_POST['no_regestrasi'];
	// $c=$_POST['jml_anggota']
	// $d=$_POST['register_tahun']
	// $e=$_POST['id']
	// $f=$_POST['alamat']
	mysql_query("UPDATE nelayan SET nama_nelayan='$_POST[nama]',no_ktp='$_POST[no]',no_kartu_nelayan='$_POST[kartu]',tgl_lahir='$_POST[lahir]',jenis_kelamin='$_POST[kelamin]',alamat='$_POST[alamat]',kota='$_POST[kota]',no_telpon='$_POST[telpon]',jabatan='$_POST[jabatan]' where id_nelayan='$_POST[id]'");
	// header("location=admin.php");
	$daerah = $_POST['daerah'];
	$idnel= $_POST['id'];
	echo "<script> location.href='detail.php?kelompok=".$idnel."&id=".$daerah."' </script>";
?>