<?php
//koneksi ke database
include "koneksi.php";
//Variabel untuk iterasi
$query ="SELECT nelayan.nama_nelayan,nelayan.no_ktp,nelayan.no_kartu_nelayan,nelayan.tgl_lahir,nelayan.jenis_kelamin,nelayan.alamat,nelayan.kota,nelayan.no_telpon,nelayan.jabatan,kelompok.nama_kub,daerah.nama_daerah FROM nelayan,kelompok,daerah WHERE nelayan.id=kelompok.id AND kelompok.kode_daerah=daerah.kode_daerah ORDER BY nama_daerah";
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
$cell[$i][7] = $data[7];
$cell[$i][8] = $data[8];
$cell[$i][9] = $data[9];
$cell[$i][10] = $data[10];

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
$this->MultiCell(19,1,'Data Nelayan');
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
$pdf->Cell(3,1,'Nama Nelayan','LRTB',0,'C');
$pdf->Cell(3,1,'No KTP','LRTB',0,'C');
$pdf->Cell(4,1,'No Kartu Nelayan','LRTB',0,'C');
$pdf->Cell(3,1,'Tanggal Lahir','LRTB',0,'C');
$pdf->Cell(3,1,'Jenis Kelamin','LRTB',0,'C');
$pdf->Cell(4,1,'Alamat','LRTB',0,'C');
$pdf->Cell(2,1,'Kota','LRTB',0,'C');
$pdf->Cell(3,1,'No Telepon','LRTB',0,'C');
$pdf->Cell(2,1,'Jabatan','LRTB',0,'C');
$pdf->Cell(4,1,'Nama KUB','LRTB',0,'C');
$pdf->Cell(2,1,'Daerah','LRTB',0,'C');
$pdf->Ln();
 
$pdf->SetFont('Times','',10);
for($j=0;$j<$i;$j++)
{
//menampilkan data dari hasil query database
$pdf->Cell(1,1,$j+1,'LBTR',0,'C');
$pdf->Cell(3,1,$cell[$j][0],'LBTR',0,'L');
$pdf->Cell(3,1,$cell[$j][1],'LBTR',0,'C');
$pdf->Cell(4,1,$cell[$j][2],'LBTR',0,'C');
$pdf->Cell(3,1,$cell[$j][3],'LBTR',0,'C');
$pdf->Cell(3,1,$cell[$j][4],'LBTR',0,'C');
$pdf->Cell(4,1,$cell[$j][5],'LBTR',0,'C');
$pdf->Cell(2,1,$cell[$j][6],'LBTR',0,'C');
$pdf->Cell(3,1,$cell[$j][7],'LBTR',0,'C');
$pdf->Cell(2,1,$cell[$j][8],'LBTR',0,'C');
$pdf->Cell(4,1,$cell[$j][9],'LBTR',0,'C');
$pdf->Cell(2,1,$cell[$j][10],'LBTR',0,'C');
$pdf->Ln();
}
 
//menampilkan output berupa halaman PDF
$pdf->Output();
?>