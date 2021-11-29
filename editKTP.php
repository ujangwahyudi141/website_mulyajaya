<?php
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$k = $_GET['kunci'];	
	//echo $k;

	$qm_dataktp = mysqli_query($koneksi,"select p.nik, p.nama , p.jk, p.golongan_darah, p.tmplahir, p.tgllahir,p.kelurahan, p.kecamatan,
								p.provinsi, p.pendidikan, p.statuskawin, p.agama, p.pekerjaan, p.alamat, p.rt, 
								p.rw, p.kode_pos, p.kewarganegaraan, p.namaayah, p.namaibu, k.tgl_pengajuan, 
								k.tgl_pengesahan, k.keterangan from datapenduduk p, dataktp k
								where p.nik=k.nik and k.nik=$k");	
	$data = mysqli_fetch_array($qm_dataktp);
	echo"<br>";
	echo "<h3 align=center>Form Edit</h3>";
	echo "<form name=fm_dataktp action=mutahirkanktp.php method=post>";
	echo "<table>";
		echo "<tr>
				<td>NIK</td>
				<td><input type=text value='$data[nik]' name='tnik' size=7 readonly></td>
			  </tr>
			  
			  <tr>
				<td>Nama Lengkap</td>
				<td><input type=text value='$data[nama]' name='tnama' required></td>
			  </tr>";
			  
		echo "<tr>
				<td>Jenis kel</td>
					
				<td>:<select name=tkelamin required>";
						$jk=$data[jk];
						if($jk=='Perempuan')
						{
							echo "<option value=Perempuan>Perempuan</option>";
							echo "<option value=Laki-Laki>Laki-Laki</option>";
						}else{
							echo "<option value=Laki-Laki>Laki-Laki</option>";
							echo "<option value=Perempuan>Perempuan</option>";
						}
					echo "</select>
				</td>
			  </tr>
			  
			  <tr>
				<td>Gol Darah</td>
				<td><input type=text value='$data[golongan_darah]' name='tgold' required></td>
			  </tr>
			  
			  <tr>
				<td>Tempat Lahir</td>
				<td><input type=text value='$data[tmplahir]' name='tlahir' required></td>
			  </tr>
			  
			  <tr>
				<td>Tanggal Lahir</td>
				<td><input type=date value='$data[tgllahir]' name='tgl' required></td>
			  </tr>
			
			  <tr>
				<td>Kelurahan/Desa</td>
				<td><input type=text value='$data[kelurahan]' name='tkeldes' required></td>
			  </tr>
			
			  <tr>
				<td>Kecamatan</td>
				<td><input type=text value='$data[kecamatan]' name='tkecamatan' required></td>
			  </tr>	
		

			  <tr>
				<td>Provinsi</td>
				<td><input type=text value='$data[provinsi]' name='tprovinsi' required></td>
			  </tr>";
			  
			  echo "<tr>
				<td>Pendidikan</td>
				<td>:<select name=tpdk required>";
						$pendidikan=$data[pendidikan];
						if($pendidikan=='SD,SMP,SMA,SMK,S1,S2,S3')
						{
							echo "<option value=S3>S3</option>";
							echo "<option value=S2>S2</option>";
							echo "<option value=S1>S1</option>";
							echo "<option value=SMK>SMK</option>";
							echo "<option value=SMA>SMA</option>";
							echo "<option value=SMP>SMP</option>";
							echo "<option value=SD>SD</option>";
						}else{
							echo "<option value=SD>SD</option>";
							echo "<option value=SMP>SMP</option>";
							echo "<option value=SMA>SMA</option>";
							echo "<option value=SMK>SMK</option>";
							echo "<option value=S1>S1</option>";
							echo "<option value=S2>S2</option>";
							echo "<option value=S3>S3</option>";
						}
					echo "</select>
				</td>
				</tr>
		
			  
			  <tr>
				<td>Status Kawin</td>
				<td><input type=text value='$data[statuskawin]' name='tkawin' required></td>
			  </tr>
			  
			  <tr>
				<td>Agama</td>
				<td><input type=text value='$data[agama]' name='tagama' required></td>
			  </tr>
			  
			  <tr>
				<td>Pekerjaan</td>
				<td><input type=text value='$data[pekerjaan]' name='tpkr' required></td>
			  </tr>
			  
			  <tr>
				<td>Alamat</td>
				<td><input type=text value='$data[alamat]' name='talamat' required></td>
			  </tr>
			  
			  <tr>
				<td>RT</td>
				<td><input type=text value='$data[rt]' name='rt' required></td>
			  </tr>
			  
			  <tr>
				<td>RW</td>
				<td><input type=text value='$data[rw]' name='rw' required></td>
			  </tr>
			  
			  <tr>
				<td>Kode Pos</td>
				<td><input type=text value='$data[kode_pos]' name='tpos' required></td>
			  </tr>
			  
			  <tr>
				<td>Kewarganegaraan</td>
				<td><input type=text value='$data[kewarganegaraan]' name='tkw' required></td>
			  </tr>
			  
			  <tr>
				<td>Nama Ayah</td>
				<td><input type=text value='$data[namaayah]' name='nmayah' required></td>
			  </tr>
			  
			  <tr>
				<td>Nama Ibu</td>
				<td><input type=text value='$data[namaibu]' name='nmibu' required></td>
			  </tr>
			  
			  <tr>
				<td>Tanggal Pengajuan</td>
				<td><input type=text value='$data[tgl_pengajuan]' name='tgl_pengajuan' required></td>
			  </tr>
			  
			  <tr>
				<td>Tanggal Pengesahan</td>
				<td><input type=text value='$data[tgl_pengesahan]' name='tgl_pengesahan' required></td>
			  </tr>
			  
			  <tr>
				<td>Keterangan</td>
				<td><input type=text value='$data[keterangan]' name='keterangan' required></td>
			  </tr>
			  
			  <tr>
				<td colspan=2 align=center>
				<input type=submit value='Mutahirkan'>
				<a href=lihatktp.php>
					<input type=button value=Batal>
				</a>
			  </tr>";
	echo "</table> </form>";
?>

