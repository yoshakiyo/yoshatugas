<?php
//koneksi ke database
include "koneksi.php";
//Variabel untuk iterasi
$query ="SELECT kelompok.nama_kub,kelompok.no_regestrasi,kelompok.alamat,kelompok.jml_anggota,kelompok.register_tahun,daerah.nama_daerah,nelayan.nama_nelayan 
		 FROM daerah, kelompok, nelayan
		 WHERE nelayan.id=kelompok.id and kelompok.kode_daerah=daerah.kode_daerah ORDER BY nama_daerah, nama_kub";
$db_query = mysql_query($query) or die("Query gagal");
$i = 0;
 
//Mengambil nilai dari query database
while($data=mysql_fetch_row($db_query))
{
$cell[$i][0] = $data[0];
$cell[$i][1] = $data[1];
$cell[$i][2] = $data[2];
$cell[$i][3] = $data[3];
$cell[$i][4] = $data[4];
$cell[$i][5] = $data[5];
$cell[$i][6] = $data[6];

$i++;
}
 
require('fpdf/fpdf.php');
 
//memulai pengaturan output PDF
class PDF extends FPDF
{
//untuk pengaturan header halaman
function Header()
{
//Pengaturan Font Header
$this->SetFont('Times','B',14); //jenis font : Times New Romans, Bold, ukuran 14
 
//untuk warna background Header
$this->SetFillColor(255,255,255);
 
//untuk warna text
$this->SetTextColor(0,0,0);
$this->MultiCell(0, 1, 'Dinas Kelautan dan Perikanan Jawa Tengah');
 
//Menampilkan tulisan di halaman
$this->MultiCell(19,1,'Data Kelompok Nelayan');
// L = Left, R = Right
//untuk garis, C = center
}
}
 
//pengaturan ukuran kertas P = Portrait
$pdf = new PDF('L','cm','Legal');
$pdf->Open();
$pdf->AddPage();
 
//Ln() = untuk pindah baris
$pdf->Ln();
$pdf->SetFont('Times','B',12);
$pdf->Cell(1,1,'No','LRTB',0,'C');
$pdf->Cell(4,1,'Nama daerah','LRTB',0,'C'); 
$pdf->Cell(5,1,'Nama KUB','LRTB',0,'C');
$pdf->Cell(4,1,'No Registrasi','LRTB',0,'C');
$pdf->Cell(6,1,'Alamat','LRTB',0,'C');
$pdf->Cell(4,1,'Jumlah anggota','LRTB',0,'C');
$pdf->Cell(4,1,'Tahun Register','LRTB',0,'C');
$pdf->Cell(4,1,'Nama Anggota','LRTB',0,'C');
$pdf->Ln();
 
$pdf->SetFont('Times','',10);
$z = 1;
$n = 1;
for($j=0;$j<$i;$j++)
{
	//menampilkan data dari hasil query database
	if($j>0){
		// untuk nama daerah
		if($cell[$j][5] == $cell[$j-1][5]){
			$pdf->Cell(1,1,'','LBTR',0,'C');
			$pdf->Cell(4,1,'','LBTR',0,'L');
			if($cell[$j][1] == $cell[$j-1][1]){ //misal kelompok sama

				$pdf->Cell(5,1,'','LBTR',0,'L');
				$pdf->Cell(4,1,'','LBTR',0,'C');
				$pdf->Cell(6,1,'','LBTR',0,'C');
				$pdf->Cell(4,1,'','LBTR',0,'C');
				$pdf->Cell(4,1,'','LBTR',0,'C');
				$pdf->Cell(4,1,$n.') '.$cell[$j][6],'LBTR',0,'L');
				$n++;
			}
			else{
				$n=1;
				$pdf->Cell(5,1,$cell[$j][0],'LBTR',0,'L');
				$pdf->Cell(4,1,$cell[$j][1],'LBTR',0,'C');
				$pdf->Cell(6,1,$cell[$j][2],'LBTR',0,'C');
				$pdf->Cell(4,1,$cell[$j][3],'LBTR',0,'C');
				$pdf->Cell(4,1,$cell[$j][4],'LBTR',0,'C');
				$pdf->Cell(4,1,$n.') '.$cell[$j][6],'LBTR',0,'L');
				$n++;	
			}
		}
		else{
			$n=1;
			$pdf->Cell(1,1,$z,'LBTR',0,'C');
			$pdf->Cell(4,1,$cell[$j][5],'LBTR',0,'L');
			$pdf->Cell(5,1,$cell[$j][0],'LBTR',0,'L');
			$pdf->Cell(4,1,$cell[$j][1],'LBTR',0,'C');
			$pdf->Cell(6,1,$cell[$j][2],'LBTR',0,'C');
			$pdf->Cell(4,1,$cell[$j][3],'LBTR',0,'C');
			$pdf->Cell(4,1,$cell[$j][4],'LBTR',0,'C');
			$pdf->Cell(4,1,$n.') '.$cell[$j][6],'LBTR',0,'L');
			$z++;
			$n++;
		}
	}
	else { //pertama halaman diload
		$pdf->Cell(1,1,$z,'LBTR',0,'C');
		$pdf->Cell(4,1,$cell[$j][5],'LBTR',0,'L');
		$pdf->Cell(5,1,$cell[$j][0],'LBTR',0,'L');
		$pdf->Cell(4,1,$cell[$j][1],'LBTR',0,'C');
		$pdf->Cell(6,1,$cell[$j][2],'LBTR',0,'C');
		$pdf->Cell(4,1,$cell[$j][3],'LBTR',0,'C');
		$pdf->Cell(4,1,$cell[$j][4],'LBTR',0,'C');
		$pdf->Cell(4,1,$n.') '.$cell[$j][6],'LBTR',0,'L');
		$n++;
		$z++;
	}
	
	// $pdf->Cell(4,1,$cell[$j][6],'LBTR',0,'C');
	$pdf->Ln();
}
 
//menampilkan output berupa halaman PDF
$pdf->Output();
?>