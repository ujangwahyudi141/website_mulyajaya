<?php
require_once "classDatabase.php";
$koneksi = new Database;
$konekan = $koneksi->konek();
class Penduduk
{
	var $nik, $no_kk, $nama, $alamat,$provinsi,$kabupaten,$kecamatan,$kode_pos,$kelurahan,$rt,$rw,$jk,$tmplahir,$golongan_darah,$agama,$pendidikan,$pekerjaan,$statuskawin,$kewarganegaraan,$stspenduduk,$namaayah,$namaibu, $status;
function disimpan()
  {
	$this->nik = $_POST['nik'];
	$this->no_kk = $_POST['no_kk'];
	$this->nama = $_POST['nama'];
	$this->alamat = $_POST['almt'];
	$this->provinsi = $_POST['provinsi'];
	$this->kabupaten = $_POST['kabupaten'];
	$this->kecamatan = $_POST['kecamatan'];
	$this->kode_pos = $_POST['kodepos'];
	$this->kelurahan = $_POST['kelurahan'];
	$this->rt = $_POST['rt'];
	$this->rw = $_POST['rw'];
	$this->jk = $_POST['jk'];
	$this->tmplahir = $_POST['tmplahir'];
	$this->tgllahir = $_POST['tgl'];
	$this->golongan_darah =$_POST['gol_darah'];
	$this->agama = $_POST['agm'];
	$this->pendidikan = $_POST['pnddk'];
	$this->pekerjaan = $_POST['pkrjn'];
	$this->statuskawin = $_POST['stskwn'];
	$this->kewarganegaraan = $_POST['kw'];
	$this->stspenduduk = $_POST['stspnddk'];
	$this->namaayah = $_POST['nmayah'];
	$this->namaibu = $_POST['nmibu'];
	$this->status = $_POST['sts'];
	
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$masuk = mysqli_query($koneksi,"insert into datapenduduk values ('$this->nik','$this->no_kk','$this->nama','$this->alamat','$this->provinsi','$this->kabupaten','$this->kecamatan','$this->kode_pos','$this->kelurahan','$this->rt','$this->rw','$this->jk','$this->tmplahir','$this->tgllahir','$this->golongan_darah','$this->agama','$this->pendidikan','$this->pekerjaan','$this->statuskawin','$this->kewarganegaraan','$this->stspenduduk','$this->namaayah','$this->namaibu','$this->status')");
		if($masuk)
			 {
				 echo "
			 <script>
				alert('data berhasil disimpan');
				window.location = 'lihat.php';
			 </script>";
			 }
			 else{
				 echo "simpan gagal";
			 }
	}
function dimutakhirkan()
	{
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$nik = $_POST['nik'];
	$nik = $_POST['nik'];
	$no_kk = $_POST['no_kk'];
	$nama = $_POST['nama'];
	$alamat = $_POST['almt'];
	$provinsi = $_POST['provinsi'];
	$kabupaten = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$kodepos = $_POST['kodepos'];
	$kelurahan = $_POST['kelurahan'];
	$RT = $_POST['rt'];
	$RW = $_POST['rw'];
	$jeka = $_POST['jk'];
	$tmplhr = $_POST['tmplahir'];
	$tgllahir = $_POST['tgl'];
	$goldar =$_POST['gol_darah'];
	$agama = $_POST['agm'];
	$pndk = $_POST['pnddk'];
	$pkr = $_POST['pkrjn'];
	$stskawin = $_POST['stskwn'];
	$kwrgaan = $_POST['kw'];
	$stspndk = $_POST['stspnddk'];
	$namayh = $_POST['nmayah'];
	$namabu = $_POST['nmibu'];
	$status = $_POST['sts'];
$rubah = mysqli_query($koneksi,"update datapenduduk set no_kk='$no_kk',nama= '$nama', alamat ='$alamat',provinsi='$provinsi',
														kabupaten='$kabupaten',kecamatan='$kecamatan',kode_pos='$kodepos',
														kelurahan='$kelurahan',rt='$RT',rw='$RW',jk='$jeka',tmplahir='$tmplhr',
														tgllahir='$tgllahir',golongan_darah='$goldar',agama='$agama',
														pendidikan='$pndk',pekerjaan='$pkr',statuskawin='$stskawin',
														kewarganegaraan='$kwrgaan',stspenduduk='$stspndk',
														namaayah='$namayh',namaibu='$namabu',status='$status' where nik = '$nik'");
if(!$rubah)
{
echo "<script>
		alert('Data gagal di Mutakhirkan');
				 window.location = 'lihat.php';	
	  </script>";
}
if($rubah){
echo "<script>
				alert('Data Berhasil di Mutakhirkan');
				 window.location = 'lihat.php';
	</script>"; 
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
	$qlihat=mysqli_query($koneksi,"select * from datapenduduk
								where nama like '$kunci%'");
	$jb = mysqli_num_rows($qlihat);	
	echo "<br>";
echo "<h4 >DATA PENDUDUK</h4>";
echo "<div style='float:right;'>
				<form name=fcari action=lihat.php method=get>
				 <input type=text name=tcari>
				 <input type=submit value=Cari>				
				</form>	
			</div>";

echo "<table >";
	echo " <tr>	  <th>No</th>
				  <th>NIK</th>
				  <th>No KK</th>
				  <th>Nama</th>
				  <th>Alamat</th>
				  <th>Provinsi</th>
				  <th>Kabupaten</th>
				  <th>Kecamatan</th>
				  <th>Kode Pos</th>
				  <th>Kelurahan</th>
				  <th>RT</th>
		          <th>RW</th>
				  <th>Jenis Kelamin</th>
				  <th>Tempat Lahir</th>
				  <th>Tanggal Lahir</th>
				  <th>Golongan Darah</th>
				  <th>Agama</th>
				  <th>Pendidikan</th>
			      <th>Pekerjaan</th>
	              <th>Status Kawin</th>
		          <th>Kewarganegaraan</th>
	              <th>Status Penduduk</th>
		          <th>Nama Ayah</th>
		          <th>Nama Ibu</th>
		          <th>Status</th>

				  	";	
	for($a=1; $a<=$jb; $a++) 
	 {			  	
	  $data = mysqli_fetch_array($qlihat);
	  if($a % 2 == 1) 
	  {
	  	echo " <tr class=ganjil><td>$a</th>
				  <td id=nik>
				  <a href=mutakhirdata.php?kunci=$data[0]>$data[0]</a>
				  </td>
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
				  <td>$data[23]</td>

				  	";	
	  }
	  else 
	  {
	  	echo " <tr class=genap><td>$a</th>
				  <td id=nik><a href=mutakhirdata.php?kunci=$data[0]>$data[0]</a></td>
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
				  <td>$data[23]</td>
				  	";		  	
	  }
	 }			  	
	echo "</table>";	
}
function dihapus()
{
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$key = $_GET['keyNik'];
$sql = mysqli_query($koneksi,"DELETE FROM datapenduduk WHERE nik ='$key'");
if($sql)
{
	echo "<script>
window.location = 'lihat.php';
</script>";
}
}

}
?>
