<?php
	include("koneksi.php");
	header("Content-type: application/json");
	$kode = $_GET['kode'];
	if($kode==""){
		echo 0;
	}
	else{
		$sql = mysql_query("SELECT id,nama_kub FROM kelompok where kode_daerah=".$kode);
		$res1 = '[';
		$res = '';
		while($row = mysql_fetch_array($sql)){
			$res .= '{"id_klpk" :"'.$row["id"].'","nama" : "'.$row["nama_kub"].'"},';
		}
		$res1 .= substr($res, 0,-1);
		$res1 .= ']';
		echo $res1;
	}
	// echo json_encode($res1);

	// echo $res1;
?>