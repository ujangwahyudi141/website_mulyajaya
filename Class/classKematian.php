<?php
require_once "classDatabase.php";
$koneksi = new Database;
$konekan = $koneksi->konek();
class Kematian
{
	var $nik, $Hari, $Tanggal, $Waktu, $Penyebab;
function disimpan()
  {
	$this->nik = $_POST['nik'];
	$this->Hari = $_POST['thari'];
	$this->Tanggal = $_POST['tgl'];
	$this->Waktu = $_POST['waktu'];
	$this->Penyebab = $_POST['tsebab'];
	
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$masuk = mysqli_query($koneksi,"insert into kematian1 values ('$this->nik','$this->Hari','$this->Tanggal','$this->Waktu','$this->Penyebab')");
	$masuk2 = mysqli_query($koneksi,"UPDATE datapenduduk set status ='Meninggal' where nik=$this->nik ");
if(($masuk) && ($masuk2))
			 {
				 echo "
			 <script>
				alert('data berhasil disimpan');
				window.location = 'lihat_kematian.php';
			 </script>";
			 }
			 else{
				 echo "simpan gagal";
			 }
	}
function dimutakhirkan()
	{
	$this->nik = $_POST['nik'];
	$this->Hari = $_POST['thari'];
	$this->Tanggal = $_POST['tgl'];
	$this->Waktu = $_POST['waktu'];
	$this->Penyebab = $_POST['tsebab'];
	
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");

	$rubah = mysqli_query($koneksi,"update kematian1 set Hari ='".$this->Hari."',Tanggal='".$this->Tanggal."',Waktu='".$this->Waktu."', Penyebab = '".$this->Penyebab."' where nik = '".$this->nik."'");

	/*$rubah = mysqli_query($koneksi,"update datapenduduk set no_kk='$no_kk',nama= '$nama', alamat ='$alamat',provinsi='$provinsi',
														kabupaten='$kabupaten',kecamatan='$kecamatan',kode_pos='$kodepos',
														kelurahan='$kelurahan',rt='$RT',rw='$RW',jk='$jeka',tmplahir='$tmplhr',
														tgllahir='$tgllahir',golongan_darah='$goldar',agama='$agama',
														pendidikan='$pndk',pekerjaan='$pkr',statuskawin='$stskawin',
														kewarganegaraan='$kwrgaan',stspenduduk='$stspndk',
														namaayah='$namayh',namaibu='$namabu' where nik = '$nik'");*/
if(!$rubah)
{
echo "<script>
		alert('Data gagal di Mutakhirkan');
				 window.location = 'lihat_kematian.php';	
	  </script>";
}
if($rubah){
echo "<script>
				alert('Data Berhasil di Mutakhirkan');
				 window.location = 'lihat_kematian.php';
	</script>"; 
}
	}
function dilihat()
{
	echo"
	<head>
	<style type='text/css' rel=stylesheet>
	h3{font-family:sans-serif;}
	.genap{background: #E5E5E5;}
	table{color:black;text-shadow:1px 1px 0px #fff;background:#eaebec;border:#ccc 1px solid;}
	table th{padding:7px 13px; background:#BFBFBF;}
	table th:firs-child{border-left:none;}
	table td{padding5px 20px;}

	table td{padding:5px 15px;}
	.arial:hover {background: #D4DBE5;}
	</style>	
	</head>";

	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	error_reporting(0);
	$kunci = $_GET['tcari'];
	$qlihat=mysqli_query($koneksi,"select p.nik, p.nama , p.jk,p.agama, p.pekerjaan,
								p.alamat, p.rt, p.rw, k.Hari,
								k.Tanggal, k.Waktu, k.Penyebab from datapenduduk p, kematian1 k
								where p.nik=k.nik");
	$baris = mysqli_num_rows($qlihat);	
		
	
	echo "<br><h3 align='center'>DATA KEMATIAN PENDUDUK</h3>";
	echo "<div style='float:top' align='right'>
			<form name=fcari action=lihat_kematian.php method=get>
			<input class='nik' type=text name=tcari size=15 Placeholder='Nik'>
			<input class='car' type=submit value=Pencarian>				
			<a href=FormKematian.php?>
				<input class='kem' type=button value=<--Kembali<<></a>	
			</form>	
			</div>";
		echo "<center><table >";
	echo "<tr >";
	echo "		<th>No</th>
				<th>Nik</th>
				<th>NamaJenazah</th>
				<th>JK</th>
				<th>Agama</th>
				<th>Pekerjaan</th>
				<th>Alamat</th>
				<th>RT</th>
				<th>RW</th>
				<th>Hari</th>
				<th>Tanggal</th>
				<th>Waktu</th>
				<th>Penyebab</th>
				<th>Option</th>
				";
				
					for($i=1;$i<=$baris;$i++)
{
$data = mysqli_fetch_array($qlihat);
echo "<tr class='arial' align=center><td><p>$i</p></td>
<td><p >$data[nik]</p></td>
<td><p >$data[nama]</p></td>
<td><p >$data[jk]</p></td>
<td><p >$data[agama]</p></td>
<td><p >$data[pekerjaan]</p></td>
<td><p >$data[alamat]</p></td>
<td><p >$data[rt]</p></td>
<td><p >$data[rw]</p></td>
<td><p >$data[Hari]</p></td>
<td><p >$data[Tanggal]</p></td>
<td><p >$data[Waktu]</p></td>
<td><p >$data[Penyebab]</p></td>
<td><a href='mutakhirkematian.php?kunci=$data[nik]'>Edit</a>
	<a href ='cetakKematian.php?kunci=$data[nik]'>Cetak</a></td>

</tr>";
}
echo "</table>";
echo "</div>";
		
	echo "</table></center>";
}
/*function dihapus()
{
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$key = $_GET['keyNik'];
$sql = mysqli_query($koneksi,"DELETE a.*, b.* FROM datapenduduk a, dataktp b WHERE a.nik ='$key' and b.nik='$key'");
if($sql)
{
	echo "<script>
window.location = 'lihat.php';
</script>";
}
}*/

function dicetak()
{
	
	require_once "library/fpdf.php";
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	
	$k = $_GET['kunci'];	
	//echo $k;

	$qm_kematian = mysqli_query($koneksi,"select p.nik, p.nama , p.jk,p.agama, p.tmplahir, p.tgllahir, p.pekerjaan,
								p.alamat, p.rt, p.rw, k.Hari,
								k.Tanggal, k.Waktu, k.Penyebab from datapenduduk p, kematian1 k
								where p.nik=k.nik and k.nik=$k");	
								
	$data = mysqli_fetch_array($qm_kematian);

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
	$pdf->Cell(0,5,'SURAT KETERANGAN KEMATIAN PENDUDUK','0','0','C',false);
	$pdf->Ln(5);
	$pdf->Cell(43,6,'','C');
	$pdf->Cell(105,0.5,'',0,0,'C',true);
	$pdf->Ln(1);
	
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(40,6,'','');
	$pdf->Cell(26,6,'NOMOR:',0,0,'C');
	$pdf->Cell(32,6,$data['nik'],0,0,'L');
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
	$pdf->Cell(44,6,'  Nama Lengkap Jenazah        :','C');
	$pdf->Cell(32,6,$data['nama'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Jenis Kelamin                       :',0,0,'');
	$pdf->Cell(32,6,$data['jk'],0,0,'L');
	$pdf->Ln(6);

	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Agama                                  :',0,0,'');
	$pdf->Cell(32,6,$data['agama'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Pekerjaan                              :',0,0,'');
	$pdf->Cell(32,6,$data['pekerjaan'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'  Alamat asal                           :',0,0,'');
	$pdf->Cell(32,6,$data['alamat'],0,0,'L');
	$pdf->Ln(10);
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(10,6,'','');
	$pdf->Cell(28,6,'Telah Meninggal Dunia Pada',0,0,'');
	$pdf->Ln(7);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'a.  Hari                                    :',0,0,'');
	$pdf->Cell(32,6,$data['Hari'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'b.  Tanggal                              :',0,0,'');
	$pdf->Cell(32,6,$data['Tanggal'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(44,6,'c.  Waktu                                 :',0,0,'');
	$pdf->Cell(32,6,$data['Waktu'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(14,6,'','');
	$pdf->Cell(45,6,'d.  Penyebab                            :',0,0,'');
	$pdf->Cell(32,6,$data['Penyebab'],0,0,'L');
	$pdf->Ln(6);
	
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(0,5,'Demikian surat keterangan Kematian ini dibuat berdasarkan keterangan pelapor.','0','0','');
	$pdf->Ln(14);
	
	$pdf->SetFont('Times','',10);
	$pdf->Cell(141,6,'Mulya Jaya,',0,0,'R');
	$pdf->Cell(20,6,$data['Tanggal'],0,0,'');
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
