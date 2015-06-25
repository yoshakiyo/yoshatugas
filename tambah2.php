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
				
				
				<h2 align="center">TAMBAH DATA NELAYAN</h2>	
				<form action="prosestambah2.php" method="POST">
					<table align="center" class="bg-lightGreen">
																</select></th></tr>
						<tr><th align="left">Nama Nelayan</th><th><input type="text" name="nama" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Nama Daerah</th><th align="left">
																<select id="daerah" name="daerah"  style=" width:230px; height:27px; border-color: #96A6C5;" face="Tahoma">
																
																<option value="" selected> ----------------------------------- </option> 
																<?php
																
																$query = mysql_query("select kode_daerah, nama_daerah from daerah");
																while($row = mysql_fetch_array($query)){
																	
																
																?>	
		
																<option value="<?php echo $row['kode_daerah']; ?>"><?php echo "<li><a href='tambah2.php?daerah=".$row[0]."'>".ucfirst($row[1])."</a></li>"; ?></option>
																<?php
																}
																?>
																</select></th></tr>
<script>
	$(document).ready(function(){
		$("#daerah").change(function(){
			var kode = $("#daerah").val();
			
			// $.get("ajax_get_kelompok.php",{kode:kode},function(data){
			$.ajax({
				url : "ajax_get_kelompok.php",
				type : "GET",
				data : {kode:kode},
				dataType : "json",
				success : function(data){
					$("#wadah_kelompok").html("");
					if(data == 0){
						var res = '<option value="99">--tidak ada kelompok--</option>';
						$("#wadah_kelompok").html(res);
					}
					else{
						var res = "";
						for(var i in data){
							res += "<option value='"+data[i].id_klpk+"'>"+data[i].nama+"</option>";
						}
						$("#wadah_kelompok").html(res);
					}
				}
			// },"json");
			});
		});
	});
</script>
						<tr><th align="left">Nama Kelompok</th><th align="left">
							<select name="kelompok" id="wadah_kelompok"  style=" width:230px; height:27px; border-color: #96A6C5;" face="Tahoma">
								<option value="99">--pilih kelompok--</option>
								<!-- <div id="wadah_kelompok"></div> -->
							</select></th></tr>
						<tr><th align="left">No KTP</th><th><input type="text" name="ktp" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No Kartu nelayan</th><th><input type="text" name="kartu" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Tanggal Lahir</th><th>
							<div class="input-control text" data-role="datepicker" data-format="yyyy-mm-dd">
							    <input type="text" name="lahir">
							    <button class="btn-date"></button>
							</div></th></tr>
						<tr><th align="left">Jenis kelamin</th><th><input type="text" name="kelamin" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Alamat</th><th><input type="text" name="alamat" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Kota</th><th><input type="text" name="kota" value= "" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">No Telpon</th><th><input type="text" name="telpon" value="" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<tr><th align="left">Jabatan</th><th><input type="text" name="jabatan" value="" style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>
						<!-- <tr><th align="left">Tahun Register</th><th><input type="text" name="tahun" value=""  style="width:260px; height:28px; border-color: #96A6C5;"></th></tr>  -->
						<tr><th></th><th align="left"><input type="submit" name="Submit" value="SIMPAN">&nbsp; &nbsp; <input type="button" name="Submit" value="BATAL" onClick=(location.href='admin.php')><th></tr>
				
					</table> 	
				</form>	
			</div>
		</div>
	</div>			   
</body>
</html>		