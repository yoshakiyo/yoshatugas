<?php
	include "koneksi.php";

	
	$a=$_POST['nama'];
	

	mysql_query("INSERT INTO daerah (kode_daerah,nama_daerah) VALUES ('','$a')");
	
	echo "<script> location.href='admin.php' </script>";
	
?>