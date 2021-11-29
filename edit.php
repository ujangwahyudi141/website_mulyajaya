<?php	
{
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$nospdh = $_GET['kode'];
	$sql = mysqli_query($koneksi,"select * from spindah where nospdh='$nospdh'");
	$data = mysqli_fetch_array($sql);
	echo "<br>";
	echo "<h4 align=center>FORM EDIT PINDAH</h4>";
	echo "<form name=fm_input action=editkanSpindah.php method=post>";
	echo "<div class=satu>";
		echo "<table align=center>
			  <tr>
				<td>Nomor Pindah</td>
				<td>:<input type=text name=nopindah value='$data[nospdh]' ></td>
			  </tr>
			  <tr>
					<td>Nomor Nik</td>
					<td>:<input type=text name=enik value=$data[nik] ></td>
			  </tr>
			  <tr><td>1. Alasan Pindah</td>
					<td>:
						<select name=apindah value=$data[alsnpdh]>
							<option value='Pekerjaan'>Pekerjaan</option>
							<option value='Pendidikan'>Pendidikan</option>
							<option value='Keamanan'>Keamanan</option>
							<option value='Keluarga'>Keluarga</option>
							<option value='Lainnya'>Lainnya</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>2. Alamat Tujuan Pindah</td>
					<td>:<input type=text name=ealamat value='$data[salamat]'' ></td>
					<td>RT</td>
					<td>:<input type=text name=art value=$data[srt] ></td>
					<td>RW</td>
					<td>:<input type=text name=arw value=$data[srw] ></td>
				</tr>
				
				<tr>
					<td>a. Desa/Kelurahan</td>
					<td>:<input type=text name=adesa value=$data[sdesa] ></td>
					<td>c. Kab/Kota</td>
					<td>:<input type=text name=akota value=$data[skota] ></td>
				</tr>
				
				<tr>
					<td>b. Kecamatan</td>
					<td>:<input type=text name=akecamatan value='$data[skcmtn]' ></td>
					<td>d. Provinsi</td>
					<td>:<input type=text name=aprovinsi value='$data[sprovinsi]' ></td>
				</tr>
				
				<tr>
					<td>3. Rencana Pindah</td>
					<td>: <input type=date name=srncn value=$data[rncnpdh] ></td>
				</tr>

				<tr>
					<td colspan=2 align=center>
				
					<input type=submit value=Edit>
					<a href=lihatSpindah.php?tcari>
					<input type=button value=Batal>
					</a>
				</tr>
			</table>";
	echo "</div> </form>";
}
?>