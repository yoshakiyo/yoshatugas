<!DOCTYPE html>
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
<body class="metro">
    <div class="grid fluid">
        <div class="row">			
            <div class="span7 offset1">
			
                    <div class="carousel" data-role="carousel">
						<div class="slide">
							<img src="image/d.jpg" style="width:100%; height:380px; ">
						</div>
					 
						<div class="slide" >
							<img src="image/a.JPG" style="width:100%; height:380px;">
						</div>
					 
						<a class="controls left"><i class="icon-arrow-left-3"></i></a>
						<a class="controls right"><i class="icon-arrow-right-3"></i></a>
					</div>
            </div>
			<div class="span4.5">
                <div class="row no-margin">
                    <div class="span4.5">
                        <div class="calendar" data-role="calendar"></div>
						<div class="times" data-role="times"></div>						
                    </div>
                </div>  
            </div>
        </div>
        <div class="row border-top offset1">
		`	<div class="span2.5">
				<ul class="dropdown-menu open keep-open" style="position: relative; width: 200px; z-index: 0">
                      <li class="menu-title"><center>Title</center></li>
                      <li><a href="login.php">LOGIN</a></li>
                      <li class="menu-title"><center>Menu</center></li>
						<?php
							include 'koneksi.php';
							$query = mysql_query("select kode_daerah, nama_daerah from daerah");
							while($res = mysql_fetch_array($query)){
								echo "<li><a href='index.php?daerah=".$res[0]."'>".ucfirst($res[1])."</a></li>";
							}
						?>
                      
                      <li class="menu-title"></li>
                      
                </ul>
			</div>
            <div class="span8 bg-grayLighter">
			<?php
			if(isset($_GET['daerah'])){
			?>
			  <table class="table bordered">
			  <?php
					$sql = mysql_query("select nama_daerah from daerah where kode_daerah='".$_GET['daerah']."'");
					while($row = mysql_fetch_assoc($sql)){
						echo "<caption><h2>Daftar Kelompok Nelayan Daerah ".ucfirst($row['nama_daerah'])."</h2></caption>";
					}
				?>
				
				<tr><th>No</th><th>Nama KUB</th><th>No Register</th><th>Alamat</th><th>Jumlah Anggota</th><th>Tahun Register</th><th>Action</th></tr>
				  <?php		   
						include 'koneksi.php';
					   
						$query = "SELECT * FROM kelompok where kode_daerah='".$_GET['daerah']."' ";
						$exe = mysql_query($query);
						$no = 1;
						while($row = mysql_fetch_assoc($exe)){
						   
							$a = $row['nama_kub'];
							$b = $row['no_regestrasi'];
							$c = ucfirst($row['alamat']);
							$d = $row['jml_anggota'];
							$e = $row['register_tahun'];
							$id = $row['id'];
							$kota = $_GET['daerah'];
							
						echo "<tr><td>$no</td><td>$a</td><td>$b</td><td>$c</td><td><center>$d</center></td><td><center>$e</center></td><td><p><a class='button primary ' href='detail_in.php?id=".$id."&kelompok=".$kota."'>Detail</a></p></td></tr>";
						$no++;
						}				   
					?>
			  </table>  
              <?php
			  }
			  else
			  {
			  ?>
			  <center><h3>PROFIL BIDANG PERIKANAN TANGKAP</h3></center><br/>

<DD>Bidang Perikanan Tangkap mempunyai tugas pokok penyiapan perumusan kebijakan teknis, pembinaan dan pelaksanaan di bidang prasarana perikanan tangkap,sarana perikanan tangkap dan pengawasan dan pengelolaan sumberdaya ikan.<br/>

Untuk menyelenggarakan tugas pokok dimaksud, Bidang Perikanan Tangkap mempunyai fungsi :<br/>
<ul>
    <li>Penyiapan bahan perumusan kebijakan teknis, pembinaan dan pelaksanaan di bidang prasarana perikanan tangkap;</li>
    <li>Penyiapan bahan perumusan kebijakan teknis, pembinaan dan pelaksanaan di bidang sarana perikanan tangkap;</li>
    <li>Penyiapan bahan perumusan kebijakan teknis, pembinaan dan pelaksanaan di bidang pengawasan dan pengelolaan sumberdaya ikan;</li>
    <li>Pelaksanaan tugas lain yang diberikan oleh Kepala Dinas sesuai dengan tugas dan fungsinya.</li>
</ul>

<b>Bidang Perikanan Tangkap membawahi :</b><br/>
<ul>
    <li>Seksi Prasarana Perikanan Tangkap</li>
    <li>Seksi Sarana Perikanan Tangkap</li>
    <li>Seksi Pengawasan dan Pengelolaan Sumber daya Ikan</li>
</ul>
<b>Nelayan</b><br/>

<DD>Nelayan merupakan orang yang secara aktif melakukan pekerjaan dalam operasi penangkapan ikan/binatang air/tanaman air.Selama 5 tahun terakhir jumlah nelayan jawa Tengah mengalami fluktuasi sedangkan jumlah armada stabil.

Jumlah nelayan perairan umum mengalami kenaikan yang diikuti naiknnya jumlah armada yang digunakan oleh nelayan.Nelayan perairan umum banyak menggunakan perahu tanpa motor hanya sebagian kecil yang menggunakan motor tempel.<br/><br/>



<b>Armada Penangkapan dan Alat Tangkap</b><br/>

<DD>Armada penangkapan Jawa Tengah didominasi oleh motor tempel pada penangkapan laut.Sedangkan penangkapan di perairan umum didominasi oleh perahu tanpa motor. Pada tahun 2011, pukat kantong dan jaring insang didominasi alat tangkap yang digunakan oleh nelayan perikanan laut,berturut sekitar 43,87% dan 33, 35%. Di Perairan umum,mayoritas alat tangkap yang digunakan adalah jaring insang sekitar 27,21% dan pancing sekitar 21,18%.
			  <?php
			  }
			  ?>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <div class="container">
        <div class="grid no-margin">
            <div class="row no-margin">
                <div class="span8 padding20 nrp">
                    
                </div>
                <div class="span3 padding20 nrp">
                    
                </div>
            </div>
        </div>
        </div>
    </div>

    <footer class="bg-dark no-margin">
        <div class="container tertiary-text bg-dark fg-white">
            </a>
        </div>
    </footer>

    <script src="js/hitua.js"></script>

</body>
</html>