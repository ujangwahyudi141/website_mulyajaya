<?php
	include "fpdf.php";
	include "koneksi.php";
	
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(0,5,'SURAT KETERANGAN PINDAH DATANG WNI','0','0','C',false);
	$pdf->SetFont('Arial','B',17);
	$pdf->Cell(0,5,'F-1.08',1,0,'R');
	$pdf->Ln(8);
	
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'DATA DAERAH ASAL','0','1','L',false);
	$pdf->Ln(2);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'1.  Nomor Kartu Keluarga','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'2.  Nama KK / Tmpt. Tgl.Lahir','C');
	$pdf->Cell(75,6,'',1,0,'C');
	$pdf->Cell(75,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'3.  Alamat','C');
	$pdf->Cell(76,6,'',1.0,'C');
	$pdf->Cell(10,6,'RT','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(10,6,'RW','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(37,6,'a.  Desa/Kelurahan','C');
	$pdf->Cell(66,6,'',1,0,'C');
	$pdf->Cell(20,6,'c.  Kab./Kota','C');
	$pdf->Cell(64,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(37,6,'b.  Kecamatan','C');
	$pdf->Cell(66,6,'',1,0,'C');
	$pdf->Cell(20,6,'d.  Provinsi','C');
	$pdf->Cell(64,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'','C');
	$pdf->Cell(17,8,'Kode Pos','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(13,8,'Telepon','C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'DATA KEPINDAHAN','0','1','L',false);
	$pdf->Ln(2);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'1.  Alasan Pindah','C');
	$pdf->Cell(45,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'2.  Alamat Tujuan Pindah','C');
	$pdf->Cell(76,6,'',1,0,'C');
	$pdf->Cell(10,6,'RT','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(10,6,'RW','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(37,6,'a.  Desa/Kelurahan','C');
	$pdf->Cell(66,6,'',1,0,'C');
	$pdf->Cell(20,6,'c.  Kab./Kota','C');
	$pdf->Cell(64,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(37,6,'b.  Kecamatan','C');
	$pdf->Cell(66,6,'',1,0,'C');
	$pdf->Cell(20,6,'d.  Provinsi','C');
	$pdf->Cell(64,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'','C');
	$pdf->Cell(17,8,'Kode Pos','C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(9,6,'',1,0,'C');
	$pdf->Cell(13,8,'Telepon','C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'3.  Klasifikasi Pindah','C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'4.  Jenis Kepindahan','C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,3,'5.  Status Nomor KK','C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,2,'     Bagi yang Tidak Pindah','C');
	$pdf->Ln(3);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,3,'6.  Status Nomor KK','C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,2,'     Bagi yang Pindah','C');
	$pdf->Ln(3);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'7.  Rencana Pindah','C');
	$pdf->Cell(30,6,'',1,0,'C');
	$pdf->Ln(7);
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(41,6,'7.  Rencana Pindah','C');
	$pdf->Ln(6);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(7,6,'N0',1,0,'C');
	$pdf->Cell(112,6,'NIK',1,0,'C');
	$pdf->Cell(50,6,'NAMA',1,0,'C');
	$pdf->Cell(16,6,'SHDK',1,0,'C');
	$pdf->Ln(6);
	
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	$pdf->Ln(6);
	
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	$pdf->Ln(6);
	
	$pdf->Cell(4,6,'','C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(7,6,'',1,0,'C');
	$pdf->Cell(50,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	$pdf->Cell(8,6,'',1,0,'C');
	
	$pdf->Output();
?>

