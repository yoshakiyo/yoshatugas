<?php
session_start();
//if(isset($_SESSION['nama']) && $_SESSION['nama']!="" && isset($_POST['password']) && $_POST['password']!=""){
if(!isset($_SESSION['nama'])){
header("location:login.php");
}		
?>
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
                      <li class="menu-title"><center>Tambah Data</center></li>
                      <li><a href="tambah.php">Tambah Data Kelompok Nelayan</a></li>
                      <li><a href="tambah1.php">Tambah Data Daerah</a></li>
                       <li><a href="tambah2.php">Tambah Data Nelayan</a></li>
                       <li class="menu-title"><center>Laporan</center></li>
                       <li><a href="laporan.php">Laporan Data Nelayan</a></li>
                       <li><a href="laporan2.php">Laporan Data Kelompok Nelayan</a></li>
                      <li class="menu-title"><center>Daerah</center></li>
						<?php
							include 'koneksi.php';
							$query = mysql_query("select kode_daerah, nama_daerah from daerah");
							while($res = mysql_fetch_array($query)){
								echo "<li><a href='admin.php?daerah=".$res[0]."'>".ucfirst($res[1])."</a></li>";
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
						echo "<tr><td>$no</td><td>$a</td><td>$b</td><td>$c</td><td><center>$d</center></td><td><center>$e</center></td><td><p><a class='button primary ' href='edit.php?id=".$id."&daerah=".$kota."'>Edit</a></p><p><a class='button primary ' href='detail.php?id=".$id."&daerah=".$kota."'>Detail</a></p><a class='button primary ' href='hapus.php?id=".$id."&daerah=".$kota."'>Hapus</a></td></tr>";
						$no++;
						}				   
					?>
			  </table>  
              <?php
			  }
			  else
			  {
			  ?>
			  <center><h2>HALAMAN ADMIN</h2></center>
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
                    <ul class="unstyled">
                        <li><a class="button warning span3 margin5"  href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>

    <footer class="bg-dark no-margin">
        <div class="container tertiary-text bg-dark fg-white">
               <a href=" class="fg-yellow"></a>
        </div>
    </footer>

    <script src="js/hitua.js"></script>

</body>
</html>
<?php
//}
//else{
	//header("location:login.php");
	
//}
?>