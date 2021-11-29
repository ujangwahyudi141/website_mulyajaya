<?php
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$k = $_GET['kunci'];
$sql = mysqli_query($koneksi,"select * from datapenduduk where nik ='$k'");
	$data = mysqli_fetch_array($sql);
echo "
<html>
	<head>
		<title>Data Penduduk Desa Mulyajaya</title>
		<link type=text/css href=cesku.css rel=stylesheet>
	</head>
<body>
	<div id=tblpenduduk>
	<form name=fdata action=rubah.php method=post onsubmit='return rubah();'>
	<table>
		<tr><td style='text-align : center;'><h3>DATA PENDUDUK</h3></td></tr>
		<tr>
			<td>NIK  :</td><td><input type=text name=nik placeholder='nomor induk ktp' value='$data[nik]' maxlength=20></td>
		</tr>
		
		<tr>
			<td>No KK  :</td><td><input type=text name=no_kk placeholder='nomor Kartu Keluarga' value='$data[no_kk]' maxlength=20></td>
		</tr>
		
		<tr>
			<td>Nama Lengkap :</td><td><input type=text name=nama placeholder='nama lengkap' value='$data[nama]'></td>
		</tr>
		
		<tr>
			<td>Alamat :</td><td><input type=text name=almt placeholder='alamat' value='$data[alamat]'></td>
		</tr>
		
		<tr>
			<td>Provinsi  :</td><td><input type=text name=provinsi placeholder='Provinsi' value='$data[provinsi]'></td>
		</tr>
		
		<tr>
			<td>Kabupaten  :</td><td><input type=text name=kabupaten placeholder='Kabupaten' value='$data[kabupaten]'></td>
		</tr>
		
		<tr>
			<td>Kecamatan  :</td><td><input type=text name=kecamatan placeholder='Kecamatan' value='$data[kecamatan]'></td>
		</tr>
		
		<tr>
			<td>Kode Pos :</td><td><input type=text name=kodepos placeholder='Kode Pos' value='$data[kode_pos]'></td>
		</tr>
		
		<tr>
			<td>Kelurahan :</td><td><input type=text name=kelurahan placeholder='Kode Pos' value='$data[kelurahan]'></td>
		</tr>
		
		<tr>
			<td>RT :</td><td><input type=text name=rt placeholder='rt' value=$data[rt]></td>
		</tr>
		
		<tr>
			<td>RW :</td><td><input type=text name=rw placeholder=rw value=$data[rw]></td>
		</tr>
		
		<tr>
			<td>Jenis kelamin :</td>
			<td>
				<select name=jk>";
			$jeka = $data[jk];
		if($jeka == "Laki-laki")
		{
			echo	"<option value=Laki-laki>Laki-laki</option>
					 <option value=Perempuan>Perempuan</option>";
		}
		if($jeka == "Perempuan")
		{
			echo	"<option value=Perempuan>Perempuan</option>
					 <option value=Perempuan>Laki-laki</option>";
		}
           echo"   </select>
			</td>	
		</tr>
		
		<tr>
			<td>Tempat Lahir :</td><td><input type=text name=tmplahir placeholder='tempat lahir' value='$data[tmplahir]'></td>
		</tr>
		
		<tr>
			<td>Tanggal Lahir :</td><td><input type=date name=tgl value='$data[tgllahir]'></td>		
		</tr>
		
		<tr>
			<td>Golongan Darah :</td><td><input type=text name=gol_darah placeholder='golongan darah' value='$data[golongan_darah]'></td>
		</tr>
		
		<tr>
			<td>Agama :</td>
			<td>
				<select name=agm>
					<option value=Islam>Islam</option>
					<option value=Kristen>Kristen</option>
					<option value=Protestan>Protestan</option>
					<option value=Budha>Budha</option>
					<option value=Konghucu>Konghucu</option>
					<option value=Hindu>Hindu</option>
			   </select>
			</td>
		</tr>
		
		<tr>
			<td>Pendidikan :</td>
			<td>
				<select name=pnddk>
				<option value=SD>SD</option>
				<option value=SMP>SMP</option>
				<option value=SMA>SMA</option>
				<option value=SMK>SMK</option>
				<option value=SI>S1</option>
				<option value=S2>S2</option>
				<option value=S3>S3</option>
	       </select>
			</td>
		</tr>
		
		<tr>
			<td>Pekerjaan :</td><td><input type=text name=pkrjn placeholder='pekerjaan' value='$data[pekerjaan]'></td>
		</tr>
		
		<tr>
			<td>Status Kawin :</td>
			<td>
				<select name=stskwn>
					<option value=Kawin>Kawin</option>
					<option value='Belum Kawin'>Belum Kawin</option>
		       </select>
			</td>
		</tr>
		
		<tr>
			<td>Kewarganegaraan :</td>
			<td>
				<select name=kw>
				 <option value=WNI>WNI</option>
				 <option value=WNA>WNA</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>Status penduduk :</td>
			<td>
				<select name=stspnddk>
				 <option value='Kepela keluarga'>Daftar</option>
				 <option value=pindah>Update</option>
				 <option value=Datang>Update</option>
			  </select>
			</td>
		</tr>
		
		<tr>
			<td>Nama Ayah :</td><td><input type=text name=nmayah placeholder='nama ayah' value='$data[namaayah]'></td>
		</tr>
		
		<tr>
			<td>Nama Ibu :</td><td><input type=text name=nmibu placeholder='nama ibu' value='$data[namaibu]'></td>
		</tr>

		<tr>
			<td>Status :</td><td><input type=text name=sts placeholder='Status' value='$data[status]'></td>
		</tr>
		
		<tr>
			<td><input type=submit value=Tambah></td>
			<td><input type=button value=hapus onclick='konfirmasi();'></td>
			<td><a href='lihat.php'>Lihat</a></td>
		</tr>
	</table>
</form>
	</div>
<script>
 function konfirmasi(){
  var agree = confirm('apakah yakin akan menghapus data ?');
  if(agree==true){
  var agree1 = confirm('$data[nik] atas nama $data[nama] juga terdapat dalam data KTP yakin untuk menghapusnya?');
  if(agree1==1){
  window.location ='hapusdata.php?keyNik=$data[nik]';
}
}
}
</script>
</body>
</html>";
?>

