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
					
					$sql = mysql_query("select * from nelayan where id_nelayan='$id'");			
					while($row = mysql_fetch_array($sql)){
				?>	 
				<h2 align="center">EDIT DATA NELAYAN</h2>	
				<form action="update2.php" method="POST">
					<table class="hovered bg-lightGreen" align="center" >
						<tr><th></th><th><input type="hidden" name="id" value= "<?php echo $row['id_nelayan']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr> 
						<tr><th align="left">Nama Nelayan</th><th><input type="text" name="nama" value= "<?php echo $row['nama_nelayan']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No KTP</th><th><input type="text" name="no" value= "<?php echo $row['no_ktp']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No Kartu Nelayan</th><th><input type="text" name="kartu" value= "<?php echo $row['no_kartu_nelayan']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Tanggal Lahir</th><th>
							<div class="input-control text" data-role="datepicker" data-format="yyyy-mm-dd">
							    <input type="text" name="lahir">
							    <button class="btn-date"></button>
							</div></th></tr>
						<tr><th align="left">Jenis Kelamin</th><th><input type="text" name="kelamin" value= "<?php echo $row['jenis_kelamin']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Alamat</th><th><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Kota</th><th><input type="text" name="kota" value= "<?php echo $row['kota']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No Telpon</th><th><input type="text" name="telpon" value="<?php echo $row['no_telpon']; ?>" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Jabatan</th><th><input type="text" name="jabatan" value="<?php echo $row['jabatan']; ?>"  style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th></th><th align="left"><input type="submit" name="Submit" value="Edit"></th></tr>
						<input type="hidden" name="daerah" value="<?php echo $row['id'];?>">
				<?php } ?>
					</table> 	
				</form>	
			</div>
		</div>
	</div>			   
</body>
</html>		    