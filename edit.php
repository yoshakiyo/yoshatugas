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
			<div class="span4 offset4 bg-lightGreen" style="margin-top:100px;">
				
				<?php
					$id=$_GET['id'];
					$sql = mysql_query("select * from kelompok where id='$id'");			
					while($row = mysql_fetch_array($sql)){
				?>	
				<h2 align="center">EDIT DATA KELOMPOK NELAYAN</h2>	
				<form action="update.php" method="POST">
					<table class="hovered bg-lightGreen" align="center" >
						<tr><th></th><th><input type="hidden" name="id" value= "<?php echo $row['id']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Nama KUB</th><th><input type="text" name="nama" value= "<?php echo $row['nama_kub']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No Register</th><th><input type="text" name="no" value= "<?php echo $row['no_regestrasi']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Alamat</th><th><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Jumlah Anggota</th><th><input type="text" name="jumlah" value="<?php echo $row['jml_anggota']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Tahun Register</th><th><input type="text" name="tahun" value="<?php echo $row['register_tahun']; ?>"  style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th></th><th align="left"><input type="submit" name="Submit" value="Edit"></th></tr>
						<input type="hidden" name="daerah" value="<?php echo $_GET['daerah'];?>">
				<?php } ?>
					</table> 	
				</form>	
			</div>
		</div>
	</div>			   
</body>
</html>		    