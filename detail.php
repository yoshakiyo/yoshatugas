<?php
include"koneksi.php";
?>
<html>
<head>
    <meta charset="utf-8">

    <meta name="product" content="Metro UI CSS Framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="description" content="Simple responsive css framework">
    <meta name="keywords" content="Metro, ui, responsive, css, framework, library">

    <link rel="stylesheet" href="css/metro-bootstrap.css">
    <link rel="stylesheet" href="css/docs.css">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <script src="js/metro/metro-loader.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
	<link rel="icon" type="image/png" href="image/f.png" />
    <title>Data Nelayan Provinsi Jateng</title>
</head>  
<body class="metro" bgcolor="">
    <div class="grid fluid">		
		<div class="row">
			<div class="span11 offset0.5 " style="margin-top:100px;">
				
				<table class="table bordered" >
			 
				<?php
				$idkel=$_GET['id'];
				$daerah=$_GET['daerah'];
					$sql = mysql_query("select nama_kub from kelompok where id='$idkel'");
					while($row = mysql_fetch_assoc($sql)){
						echo "<caption><h2>Daftar Nama Nelayan ".ucfirst($row['nama_kub'])."</h2></caption>";
					}
				?>
				<tr><th>No</th><th>Nama Nelayan</th><th>No KTP</th><th>No Kartu Nelayan</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Alamat</th><th>Kota</th><th>No Telpon</th><th>Jabatan</th><th colspan='2'>Action</th></tr>
				  <?php		   
						include 'koneksi.php';
					   	
						$query = "SELECT id_nelayan, nama_nelayan, no_ktp,no_kartu_nelayan,tgl_lahir,jenis_kelamin,alamat,kota,no_telpon,jabatan FROM nelayan WHERE id='$idkel'";
						$exe = mysql_query($query);
						$no = 1;
						while($row = mysql_fetch_assoc($exe)){
						   
							$a = $row['nama_nelayan'];
							$b = $row['no_ktp'];
							$c = $row['no_kartu_nelayan'];
							$d = $row['tgl_lahir'];
							$e = $row['jenis_kelamin'];
							$f = ucfirst($row['alamat']);
							$g = $row['kota'];
							$h = $row['no_telpon'];
							$i = $row['jabatan'];
							$idnel = $row['id_nelayan'];
							
						echo "<tr><td>$no</td><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td><td>$h</td><td>$i</td><td><a class='button primary' href='edit2.php?id=".$idnel."'>Edit</a></td><td><a class='button primary' href='hapus_nel.php?id=".$idnel."&&idkel=".$idkel."'>Hapus</a></td></tr>";
						$no++;

						}				   
					
					?>

			  </table> 
			  <?php 
			 echo"<a class='button primary' href='admin.php?daerah=".$daerah."'>Kembali</a>";
			 ?>
				</form>	
			</div>
		</div>
	</div>			   
</body>
</html>		    