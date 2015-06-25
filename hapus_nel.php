 	<?php
	include "koneksi.php";

	$id = $_GET['id'];

	mysql_query("delete from nelayan where id_nelayan='$id'") or die("Gagal menghapus data.");

	$daerah = $_GET['daerah'];
	$idnel= $_GET['idkel'];
	echo "<script> location.href='detail.php?id=".$idnel."&daerah=".$daerah."' </script>";

	?>
