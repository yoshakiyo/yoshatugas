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
		<div class="row " >
			<div class="span4 offset4 bg-lightGreen" style="margin-top:100px;">
				
				
				<h2 align="center">TAMBAH DATA DAERAH</h2>	
				<form action="prosestambah1.php" method="POST">
					<table align="center" class="bg-lightGreen">
						<tr><th align="left">Nama Daerah</th><th><input type="text" name="nama" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th></th><th align="left"><input type="submit" name="Submit" value="SIMPAN">&nbsp; &nbsp; <input type="button" name="Submit" value="BATAL" onClick=(location.href='admin.php')><th></tr>
				
					</table> 	
				</form>	
			</div>
		</div>
	</div>			   
</body>
</html>		