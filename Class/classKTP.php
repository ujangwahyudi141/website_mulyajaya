<?php
require_once "classDatabase.php";
$koneksi = new Database;
$konekan = $koneksi->konek();
class KTP
{
	var $nik, $tgl_pengajuan, $tgl_pengesahan, $keterangan;

	function disimpan()
	{
		$this->nik				= $_POST['tnik'];
		$this->tgl_pengajuan  	= $_POST['tgl_pengajuan'];
		$this->tgl_pengesahan 	= $_POST['tgl_pengesahan'];
		$this->keterangan		= $_POST['tket'];
	
		$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
    $dt = mysqli_query($koneksi,"select * from datapenduduk where nik='$this->nik'");
    $data = mysqli_fetch_array($dt);

    	//session_start();
    	//$_SESSION['ckstatus'] = $data['status'];
    	
	if($data['status'] == "Meninggal")

			 {
				 echo "
			 <script>
				alert('Nik Yang Anda Masukkan Berstatus Meninggal');
				window.location = 'FormKTP.php';
			 </script>";
			
			
			 }
			 else{
			 	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
				$masuk = mysqli_query ($koneksi, "insert into dataktp values ('$this->nik','$this->tgl_pengajuan','$this->tgl_pengesahan','$this->keterangan')");
				 
			 } 
			 if ($masuk){
			 	echo "<script> alert('Data Berhasil di Simpan');
				 	window.location = 'lihatktp.php';
				 	</script>";
			 }
	/*
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$masuk = mysqli_query ($koneksi, "insert into dataktp values ('$this->nik','$this->tgl_pengajuan','$this->tgl_pengesahan','$this->keterangan')");
	if($masuk)
			 {
			echo "
			 <script>
				alert('data berhasil disimpan');
				window.location = 'FormKTP.php';
			 </script>";
			 }
			 else{
				 echo "simpan gagal";
			 }*/
	}
		function dimutakhirkan()
		{
	$nik 		= $_POST['tnik'];
	$nama 		= $_POST['tnama'];
	$jk	 		= $_POST['tkelamin'];
	$goldarah	= $_POST['tgold'];
	$tmplahir 	= $_POST['tlahir'];
	$tgllahir 	= $_POST['tgl'];
	$tkeldes	= $_POST['tkeldes'];
	$tkecamatan	= $_POST['tkecamatan'];
	$provinsi 	= $_POST['tprovinsi'];
	$pendidikan = $_POST['tpdk'];
	$stskawin 	= $_POST['tkawin'];
	$agama		= $_POST['tagama'];
	$pekerjaan 	= $_POST['tpkr'];
	$alamat 	= $_POST['talamat'];
	$RT 		= $_POST['rt'];
	$RW 		= $_POST['rw'];
	$kodepos 	= $_POST['tpos'];
	$kewarganegaraan =$_POST['tkw'];
	$namaayah 	= $_POST['nmayah'];
	$namaibu 	= $_POST['nmibu'];
	$tglpengajuan = $_POST['tgl_pengajuan'];
	$tglpengesahan = $_POST['tgl_pengesahan'];
	$ket			= $_POST['keterangan'];
	
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$update = mysqli_query($koneksi, "update datapenduduk p, dataktp k
											set p.nama	   		 ='$nama',
												p.jk 		        ='$jk',
												p.golongan_darah		='$goldarah',
												p.tmplahir	    ='$tmplahir',
												p.tgllahir	    ='$tgllahir',
												p.kelurahan	    ='$tkeldes',
												p.kecamatan		='$tkecamatan',
												p.provinsi	    ='$provinsi',
												p.pendidikan		='$pendidikan',
												p.statuskawin	    ='$stskawin',
												p.agama			='$agama',
												p.pekerjaan		='$pekerjaan',
												p.alamat 		    ='$alamat',
												p.rt		        ='$RT',
												p.rw		        ='$RW',
												p.kode_pos			='$kodepos',
												p.kewarganegaraan	='$kewarganegaraan',
												p.namaayah		='$namaayah',
												p.namaibu	        ='$namaibu',
												k.tgl_pengajuan 	='$tglpengajuan',
												k.tgl_pengesahan	='$tglpengesahan',
												k.keterangan		='$ket'
												where p.nik=k.nik and k.nik='$nik'");
												
	
	if($update)
	{
			echo "<script>
					alert('Data berhasil di Edit');
					window.location = 'lihatktp.php';
				</script>";
			}else{
				echo"gagal";
			}
		}

		function dilihat()
{
	echo"
	<head>
	<style type='text/css' rel=stylesheet>
	h4{font-family:sans-serif;}
	.genap{background: #E5E5E5;}
	table{color:black;text-shadow:1px 1px 0px #fff;background:#eaebec;border:#ccc 1px solid;}
	table th{padding:7px 13px; background:#BFBFBF;}
	table th:firs-child{border-left:none;}
	table td{padding5px 20px;}

	table td{padding:5px 15px;}
	.ganjil:hover, .genap:hover {background: #D4DBE5;}
	</style>	
</head>";
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
echo "
		<style>
			#nik:hover{ background :#D8D1D1};
			#nik a > #updt{display:none};
		</style>";
	error_reporting(0);
	$kunci = $_GET['tcari'];
	$qlihat=mysqli_query($koneksi,"select p.nik, p.nama , p.jk, p.golongan_darah, p.tmplahir, p.tgllahir,p.kelurahan, p.kecamatan,
								p.provinsi, p.pendidikan, p.statuskawin, p.agama, p.pekerjaan, p.alamat, p.rt, 
								p.rw, p.kode_pos,p.kewarganegaraan, p.namaayah, p.namaibu, k.tgl_pengajuan, 
								k.tgl_pengesahan, k.keterangan from datapenduduk p, dataktp k
								where p.nik=k.nik"); 
									$jb = mysqli_num_rows($qlihat);	
echo "<br><div style='float:right'>
				<form name=fcari action=lihatktp.php method=get>
				 <input type=text name=tcari placeholder='Nik' size='4'>
				 <input type=submit value=Cari>				
				</form>		
			</div>
				
			<div style='float:left'>
				<a href=FormKTP.php>
				<input type=button value=<--Kembali></a>
			</div>
			";
	echo "<br><h4 align=center>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</h4>";
	echo "<table  align=center >";	
	echo " <tr class='btl'>   
				  <th>No</th>
				  <th>NIK</th>
	              <th>Nama</th>
				  <th>Jenis kelamin</th>
				  <th>Golongan darah</th>
				  <th>Tempat Lahir</th>
				  <th>Tanggal lahir</th>
				  <th>kelurahan</th>
				  <th>Kecamatanr</th>
				  <th>Provinsi</th>
				  <th>pendidikan</th>
				  <th>Statuskawin</th>
				  <th>Agama</th>
				  <th>Pekerjaan</th>
				  <th>alamat</th>
				  <th>RT</th>
				  <th>RW</th>
				  <th>kode pos</th>
				  <th>Kewarganegaraan</th>
				  <th>Nama Ayah</th>
				  <th>Nama Ibu</th>
				  <th>Tanggal Pengajuan</th>
				  <th>Tanggal pengesahan</th>
				  <th>Ketearangan</th>
				  <th>Option</th>
				  	";	
	for($a=1; $a<=$jb; $a++) 
	 {			  	
	  $data = mysqli_fetch_array($qlihat);
	  if($a % 2 == 1) 
	  {
	  	echo " <tr class=ganjil><td>$a</th>
				  <td>$data[0]</td>
				  <td>$data[1]</td>
				  <td>$data[2]</td>
				  <td>$data[3]</td>
				  <td>$data[4]</td>
				  <td>$data[5]</td>
				  <td>$data[6]</td>
				  <td>$data[7]</td>
				  <td>$data[8]</td>
				  <td>$data[9]</td>
				  <td>$data[10]</td>
				  <td>$data[11]</td>
				  <td>$data[12]</td>
				  <td>$data[13]</td>
				  <td>$data[14]</td>
				  <td>$data[15]</td>
				  <td>$data[16]</td>
				  <td>$data[17]</td>
				  <td>$data[18]</td>
				  <td>$data[19]</td>
				  <td>$data[20]</td>
				  <td>$data[21]</td>
				  <td>$data[22]</td>
				  <td>
						<a href = editKTP.php?kunci=$data[0]>
						<input class='btl' type=button value=Edit></a>
						<a href = cetak_ktp.php?kunci=$data[0]> 
						<input class='btl' type=button value=Cetak></a>
						
				 </td>";	
	  }
	  else 
	  {
	  	echo " <tr class=genap><td>$a</th>
				  <td>$data[0]</td>
				  <td>$data[1]</td>
				  <td>$data[2]</td>
				  <td>$data[3]</td>
				  <td>$data[4]</td>
				  <td>$data[5]</td>
				  <td>$data[6]</td>
				  <td>$data[7]</td>
				  <td>$data[8]</td>
				  <td>$data[9]</td>
				  <td>$data[10]</td>
				  <td>$data[11]</td>
				  <td>$data[12]</td>
				  <td>$data[13]</td>
				  <td>$data[14]</td>
				  <td>$data[15]</td>
				  <td>$data[16]</td>
				  <td>$data[17]</td>
				  <td>$data[18]</td>
				  <td>$data[19]</td>
				  <td>$data[20]</td>
				  <td>$data[21]</td>
				  <td>$data[22]</td>
				  <td>
						<a href = edit.php?kunci=$data[0]>
						<input class='btl' type=button value=Edit></a> 
						<a href = cetak_ktp.php?kunci=$data[0]>
						<input class='btl' type=button value=Cetak></a>
				</td>";
	  }
	 }			  	
	echo "</table>";
	
}

function dicetak()
{
	
	require_once "library/fpdf.php";
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	
	$k = $_GET['kunci'];	
	//echo $k;

	/*$qm_kematian = mysqli_query($koneksi,"select p.nik, p.nama , p.jk,p.agama, p.tmplahir, p.tgllahir, p.pekerjaan,
								p.alamat, p.rt, p.rw, k.Hari,
								k.Tanggal, k.Waktu, k.Penyebab from datapenduduk p, kematian1 k
								where p.nik=k.nik and k.nik=$k");*/

	$qm_ktp=mysqli_query($koneksi,"select p.nik, p.nama , p.jk, p.golongan_darah, p.tmplahir, p.tgllahir,p.kelurahan, p.kecamatan,
								p.provinsi, p.pendidikan, p.statuskawin, p.agama, p.pekerjaan, p.alamat, p.rt, 
								p.rw, p.kode_pos,p.kewarganegaraan, p.namaayah, p.namaibu, k.tgl_pengajuan, 
								k.tgl_pengesahan, k.keterangan from datapenduduk p, dataktp k
								where p.nik=k.nik and k.nik=$k"); 	
								
	$data = mysqli_fetch_array($qm_ktp);

	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	$pdf->SetFont('Times','B',15);
	$pdf->Cell(0,5,'PEMERINTAHAN KABUPATEN KARAWANG','0','0','C',false);
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','B',15);	
	$pdf->Cell(0,5,'KECAMATAN KUTAWALUYA','0','0','C',false);
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','B',15);
	$pdf->Cell(0,5,'DESA MULYAJAYA','0','0','C',false);
	$pdf->Ln(10);
	
	$pdf->Cell(190,0.6,'','0','1','C',true);
	$pdf->Ln(1);
	$pdf->Cell(190,0.3,'','0','1','C',true);
	$pdf->Ln(9);
	
	$pdf->SetFont('Times','B',13);
	$pdf->Cell(0,5,'SURAT KETERANGAN KTP','0','0','C',false);
	$pdf->Ln(5);
	$pdf->Cell(64,6,'','C');
	$pdf->Cell(62,0.5,'',0,0,'C',true);
	$pdf->Ln(1);
	
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(40,6,'','');
	$pdf->Cell(26,6,'NOMOR:',0,0,'C');
	
	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'Yang bertanda tangan dibawah ini menerangakan bahwa:','0','0','');
	$pdf->Ln(10);
	
	
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  NIK                                       :',0,0,'');
	$pdf->Cell(32,6,$data['nik'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Nama Lengkap                     :','C');
	$pdf->Cell(32,6,$data['nama'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Tempat Lahir                        :',0,0,'');
	$pdf->Cell(32,6,$data['tmplahir'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Tanggal Lahir                       :',0,0,'');
	$pdf->Cell(32,6,$data['tgllahir'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Jenis Kelamin                       :',0,0,'');
	$pdf->Cell(32,6,$data['jk'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Alamat                                  :',0,0,'');
	$pdf->Cell(32,6,$data['alamat'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(20,6,'','');
	$pdf->Cell(38,6,'  RT                                  :',0,0,'');
	$pdf->Cell(32,6,$data['rt'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(20,6,'','');
	$pdf->Cell(38,6,'  RW                                 :',0,0,'');
	$pdf->Cell(32,6,$data['rw'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(20,6,'','');
	$pdf->Cell(38,6,'  Kecamatan                     :',0,0,'');
	$pdf->Cell(32,6,$data['kecamatan'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Agama                                  :',0,0,'');
	$pdf->Cell(32,6,$data['agama'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Statuskawin                          :',0,0,'');
	$pdf->Cell(32,6,$data['statuskawin'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Pekerjaan                              :',0,0,'');
	$pdf->Cell(32,6,$data['pekerjaan'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Kewarganegaraan                 :',0,0,'');
	$pdf->Cell(32,6,$data['kewarganegaraan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'Dibuat',0,0,'');
	$pdf->Ln(7);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'a.  Tanggal Pengajuan            :',0,0,'');
	$pdf->Cell(32,6,$data['tgl_pengajuan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'b.  Tanggal Pengesahan         :',0,0,'');
	$pdf->Cell(32,6,$data['tgl_pengesahan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'c.  Keterangan                        :',0,0,'');
	$pdf->Cell(32,6,$data['keterangan'],0,0,'L');
	$pdf->Ln(8);
	
	/*$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(45,6,'d.  Penyebab                            :',0,0,'');
	$pdf->Cell(32,6,$data['Penyebab'],0,0,'L');
	$pdf->Ln(6);*/
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'Dengan ini menerangakan bahwa orang yang bersangkutan benar telah terdata dalam Database Kependudukan.','0','0','');
	$pdf->Ln(6);

	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'Desa Mulyajaya.','0','0','');
	$pdf->Ln(8);

	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'Demikian surat keterangan ini kami buat dengan sebenarnya.','0','0','');
	$pdf->Ln(14);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(141,6,'Mulya Jaya,',0,0,'R');
	$pdf->Cell(20,6,$data['tgl_pengajuan'],0,0,'');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(159,6,'Kepala Desa Mulya Jaya',0,0,'R');
	$pdf->Ln(30);
	
	$pdf->Cell(161,6,'...........................................',0,0,'R');
	$pdf->Ln(5);
	$pdf->Cell(121,6,'','');
	$pdf->Cell(40,0.1,'',0,0,'R',true);
	$pdf->Ln(1);
	
	$pdf->Output();
}	

}

?>
