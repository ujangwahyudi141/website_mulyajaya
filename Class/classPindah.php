<?php
require_once "classDatabase.php";
$koneksi = new Database;
$konekan = $koneksi->konek();
class Pindah
{
	var $nospdh, $nik, $alsnpdh, $srt, $srw, $sdesa, $skcmtn, $skota, $sprovinsi, $rncnpdh, $salamat;
function disimpan()
{
	$this->nospdh = $_POST['nospdh'];
	$this->nik = $_POST['enik'];
	$this->alsnpdh = $_POST['apindah'];
	$this->srt = $_POST['art'];
	$this->srw = $_POST['arw'];
	$this->sdesa = $_POST['adesa'];
	$this->skcmtn = $_POST['akecamatan'];
	$this->skota = $_POST['akota'];
	$this->sprovinsi = $_POST['aprovinsi'];
	$this->rncnpdh = $_POST['srncn'];
	$this->salamat = $_POST['ealamat'];

	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
    $dt = mysqli_query($koneksi,"select * from datapenduduk where nik='$this->nik'");
    $data = mysqli_fetch_array($dt);
    	
	if($data['status'] == "Meninggal")

			 {
				 echo "
			 <script>
				alert('Nik Yang Anda Masukkan Berstatus Meninggal');
				window.location = 'FormPindah.php';
			 </script>";
			
			
			 }
			 else{
			 	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
				$masuk = mysqli_query($koneksi,"insert into spindah values ('$this->nospdh','$this->nik','$this->alsnpdh','$this->srt',
				'$this->srw','$this->sdesa','$this->skcmtn','$this->skota','$this->sprovinsi','$this->rncnpdh','$this->salamat')");
				 
			 } 
			 if ($masuk){
			 	echo "<script> alert('Data Berhasil di Simpan');
				 	window.location = 'lihatSpindah.php';
				 	</script>";
			 }
	}
function dimutahirkan()
{

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
	error_reporting(0);
	$kunci = $_GET['tcari'];
	$qlihat=mysqli_query($koneksi,"select * from spindah where nospdh like '$kunci%'");
	$jb = mysqli_num_rows($qlihat);
	echo "<br>";	
	echo "<div class=satu><h4 align=center>DATA PINDAH PENDUDUK</h4></div>";
	echo "<div class=dua style='float: top' align=right>
				<form name=fcari action=lihatSpindah.php method=get>
				 <input type=text name=tcari>
				 <input type=submit value=Cari>
				 <a href=FormPindah.php><input type=button value=Kembali></a>				
				</form>	
			</div>";
	echo "<table align=center>";
	echo " <tr class=atas>
			   <th>No</th>
			   <th>Nomor Surat Pindah</th>
			   <th>Nik</th>
			   <th>Alasan Pindah</th>
			   <th>RT</th>
			   <th>RW</th>
			   <th>Desa</th>
			   <th>Kota</th>
			   <th>Kecamatan</th>
			   <th>Provinsi</th>
			   <th>Rencana Pindah</th>
			   <th>Alamat</th>
			   <th>Action</th></tr>
				  	";	
	for($a=1; $a<=$jb; $a++) 
	 {			  	
	  $data = mysqli_fetch_array($qlihat);
	  if($a % 2 == 1) 
	  {
	  	echo " <tr class=ganjil><td>$a</td>
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
				  <td>
						<a href =edit.php?kode=$data[0]>Edit</a> 
						|
						
						|
						<a href =cetak.php?kunci=$data[1]>Cetak</a>
				  </td></tr>";	
	  }
	  else 
	  {
	  	echo " <tr class=genap><td>$a</td>
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
				  <td>
						<a href =edit.php?kode=$data[0]>Edit</a> 
						|
						
						|
						<a href =cetak.php?kunci=$data[1]>Cetak</a>
				  </td>
				  	</tr>";		  	
	  }
	 }			  	
	echo "</table>";
}
function dihapus()
{
	$nospdh = $_GET['kunci'];
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$qhapus = mysqli_query($koneksi,"select * from spindah where nospdh='$nospdh'");
	$data = mysqli_fetch_array($qhapus);
	
	echo "<div class=box>
		   <div class=headbox>
		    Pesan Program !!!
		     <label style='color: red; float: right; padding: 0px 5px 0px 0px; '>
				<a href=lihat.php?tcari>
				x
		     </label>
		    </a>
		   </div>
		   
		   Yakin <label style='color:red;'>nik ini=[$data[nik]]dengan nomor pindah=[$data[nospdh]] </label>mau dihapus?
		   
		   <form action=hapuskanSpindah.php method=get>
		    <input type=hidden value=$data[nospdh] name=key>
		    <input type=submit value=Ya>
		     <a href = lihatSpindah.php?tcari style='text-decoration:none;'>
		      <input type=button value=Tidak>
		     </a>
		   </form>
		   </div>";
}
function diedit()
{
	
	$nospdh			= $_POST['nopindah'];
	$nik			= $_POST['enik'];
	$alsnpdh		= $_POST['apindah'];
	$salamat		= $_POST['ealamat'];
	$srt			= $_POST['art'];
	$srw			= $_POST['arw'];
	$sdesa			= $_POST['adesa'];
	$skota			= $_POST['akota'];
	$skcmtn			= $_POST['akecamatan'];
	$sprovinsi		= $_POST['aprovinsi'];
	$rncnpdh  		= $_POST['srncn'];
	
	
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$rubah = mysqli_query($koneksi, "update spindah set nik			='$nik',
																 alsnpdh		='$alsnpdh',
																 srt			='$srt',
																 srw			='$srw',
																 sdesa			='$sdesa',
																 skota			='$skota',
																 skcmtn			='$skcmtn',
																 sprovinsi		='$sprovinsi',
																 rncnpdh		='$rncnpdh',
																 salamat		='$salamat'
																 where nospdh	='$nospdh'");
		
	if($rubah)
	{
		echo "
			<script>
			 alert('Data berhasil disimpan');
			 window.location = 'lihatSpindah.php';
			</script> ";
	}
}
function dicetak()
{
	
	require_once "library/fpdf.php";
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$k = $_GET['kunci'];
	$qm_pindah=mysqli_query($koneksi,"select p.nik, p.nama , p.no_kk, p.tmplahir, p.jk,  p.agama, p.kewarganegaraan, 
								p.pendidikan, p.statuskawin, p.pekerjaan, p.alamat, k.sdesa,k.nospdh,k.rncnpdh, k.skcmtn, k.skota, k.sprovinsi, k.alsnpdh 
								from datapenduduk p, spindah k
								where p.nik=k.nik and k.nik=$k"); 	
								
	$data = mysqli_fetch_array($qm_pindah);

	/*$nospdh = $_GET['kunci'];
	$cetak = mysqli_query($koneksi,"select * from spindah k, datapenduduk p order by nospdh='$nospdh'");
	$data = mysqli_fetch_array($cetak);*/
	
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
	$pdf->Cell(0,5,'SURAT KETERANGAN PINDAH PENDUDUK','0','0','C',false);
	$pdf->Ln(5);
	$pdf->Cell(47,6,'','C');
	$pdf->Cell(96,0.5,'',0,0,'C',true);
	$pdf->Ln(1);
	
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(40,6,'','');
	$pdf->Cell(26,6,'NOMOR:',0,0,'C');
	$pdf->Cell(32,6,$data['nospdh'],0,0,'L');
	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,5,'Yang bertanda tangan dibawah ini menerangakan Permohonan Pindah Penduduk WNI dengan data sebagai berikut:','0','0','');
	$pdf->Ln(10);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'1.  Nama',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['nama'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'2.  NIK','C');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['nik'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'3.  Nomor Kartu Keluarga','C');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['no_kk'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'4.  Tempat Lahir','C');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['tmplahir'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'5.  Jenis Kelamin','C');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['jk'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'6.  Agama',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['agama'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'7.  Kewarganegaraan',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['kewarganegaraan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'8.  Pendidikan',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['pendidikan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'9.  Status Perkawinan',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['statuskawin'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'10.  Pekerjaan',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['pekerjaan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'11.  Alamat asal',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Cell(32,6,$data['alamat'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'12.  Pindah Ke',0,0,'');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'a.  Desa/Kelurahan                 :',0,0,'');
	$pdf->Cell(32,6,$data['sdesa'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'b.  Kecamatan                         :',0,0,'');
	$pdf->Cell(32,6,$data['skcmtn'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'c.  Kota/Kabupaten                 :',0,0,'');
	$pdf->Cell(32,6,$data['skota'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(45,6,'d.  Provinsi                              :',0,0,'');
	$pdf->Cell(32,6,$data['sprovinsi'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(48,6,'13.  Alasan Pindah                      :',0,0,'');
	$pdf->Cell(40,6,$data['alsnpdh'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'14.  Pengikut',0,0,'');
	$pdf->Cell(40,6,':',0,0,'C');
	$pdf->Ln(14);
	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(0,5,'Demikian surat keterangan pindah ini dibuat untuk dapat digunakan sebagaimana semestinya.','0','0','');
	$pdf->Ln(14);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(141,6,'Mulya Jaya,',0,0,'R');
	$pdf->Cell(20,6,$data['rncnpdh'],0,0,'');
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