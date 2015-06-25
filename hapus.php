 <html>

<head>

</head>

<body>

	<?php
	include "koneksi.php";

	$id = $_GET['id'];

	mysql_query("delete from kelompok where id='$id'") or die("Gagal menghapus data.");

	$daerah = $_GET['daerah'];
	echo "<script> location.href='admin.php?daerah=".$daerah."' </script>";

	?>

</body>

</html>