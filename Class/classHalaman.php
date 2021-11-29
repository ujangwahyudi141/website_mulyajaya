<!DOCTYPE html>
<title>Sistem Administrasi Desa Mulyajaya</title>

    <link rel="stylesheet" href="style/css.css" type="text/css">
	<link type=text/css href="style/login.css" rel=stylesheet>
	<link type=text/css href="style/imageslider.css" rel=stylesheet>

<script type=text/javascript>
			function Tampilkan()
			{
			var nik = document.fkematian.nik.value;
			
			document.fkematian.nik.value=nik;
			document.getElementById('fkematian').action='FormKematian.php';
			document.getElementById('fkematian').submit();
			}
			</script>
			<script type=text/javascript>
  
		function tampil()
		{
				var text = document.getElementById ('Hr').value;
				document.getElementById('text_hr').value=text;
		}
		</script>
		

<?php

class Halaman
{
function HalamanUtama()
{
  echo '<div id="wrapper">';
    echo '<div id="header" align=center>';
		echo '<img src="img/logo11.png" class=logo><br>';
		echo '<a href="" class="stmik">Desa MulyaJaya</a><br>';
		echo '<a href="" class="stmik">Kecamatan Kutawaluya</a><br>';
		echo '<a href="" class="stmik">Kabupaten Karawang</a><br>';
		echo '<a href="logout.php" class="Logout">Logout</a>';
		error_reporting(0);
		session_start();
		echo '<h4 style="color:white;margin-left:650px;margin-top:-15px;">Hai Petugas , '.$_SESSION["username"].'</h4>';
		
	echo '<div id=nav_menu>';
		echo '<table >';
        echo '<tr>';
					echo '<td id=menu><a href="FormPenduduk.php" target="satu">Input Data Penduduk</a></td>';
						echo '<td id=menu><a href="FormKTP.php" target="satu">Membuat Surat KTP</a></td>';
								echo '<td id=menu><a href="FormKematian.php" target="satu">Membuat Surat Kematian</a></td>';
									echo '<td id=menu><a href="FormKelahiran.php" target="satu">Membuat Surat Kelahiran</a></td>';
										echo '<td id=menu><a href="FormPindah.php" target="satu">Membuat Surat Pindah</a></td>';
										echo '<td id=menu><a href="lihatpetugas.php" target="satu">Kelola Petugas</a></td>';
										
				
			echo '</tr>';
		echo '</table>';
	echo '</div>';
       
    echo '</div>';
   echo '<div id="conte">';
		 echo '<iframe name="satu"></iframe>';
	 echo '</div>';
	
    echo '</div>';
    echo '<div id="footer">';
    echo '&copy; STMIK KHARISMA KARAWANG 2019';
echo '</div>';
}

function FormMenu()
{
	echo '<div id="wrapper">';
    echo '<div id="header" align=center>';
		echo '<img src="img/logo11.png" class=logo><br>';
		echo '<a href="" class="stmik">Desa MulyaJaya</a><br>';
		echo '<a href="" class="stmik">Kecamatan Kutawaluya</a><br>';
		echo '<a href="" class="stmik">Kabupaten Karawang</a><br>';
		echo '<a href="logout.php" class="Logout">Logout</a>';
		
	echo '<div id=nav_menu>';
		echo '<table >';
        echo '<tr>';
						echo '<td id=menu><a href="FormKTP.php" target="satu">Membuat Surat KTP</a></td>';
								echo '<td id=menu><a href="FormKematian.php" target="satu">Membuat Surat Kematian</a></td>';
									echo '<td id=menu><a href=>Membuat Surat Kelahiran</a></td>';
										echo '<td id=menu><a href=>Membuat Surat Pindah</a></td>';
								
				
			echo '</tr>';
		echo '</table>';
	echo '</div>';
       
    echo '</div>';
   echo '<div id="conte">';
		 echo '<iframe name="satu"></iframe>';
	 echo '</div>';
	
    echo '</div>';
    echo '<div id="footer">';
    echo '&copy; STMIK KHARISMA KARAWANG 2019';
echo '</div>';
}
function FormLogin()
{

echo "<body>";
 echo "<div class='loginpage'>";
	echo "<div class='login'>";
	echo "<form name=flog action='login.php' method=post onsubmit='return validasi();'><br>";	
	echo '<div class=cebok><img src="img/h.jpg"></div><br>';
	echo "<table>";
	echo "<b><h3><marquee durection='right' scrollamount='5' align='center'><i>Silahkan Login</i></marquee></h3></b><br>";
	echo "</div>";	
	echo "<div class='container'>";
    echo "<label><b>Username</b></label><BR>";
    echo "<input type='text' placeholder='Enter Username' name='username' required><BR><BR>";

    echo "<label><b>Password</b></label><BR>";
    echo "<input type='password' placeholder='Enter Password' name='password' required><BR><BR>";
	
	echo "<button type=submit>Login</button><BR><BR>";

	
	echo "</div>";
	echo " <div class='containers' >";
    echo "<button><a href='index.php'>Cancel</a></button>";

  echo "</div>";
	echo "</table>";
	echo "<div class='both'>";
	echo "</div>";	
	echo "</form>";
	echo "<div name='flog'>";
			
	echo "</div>";
	echo "</div>";
}
function FormPenduduk()
{
echo "

<html>
	<head>
		<title>Data Penduduk Desa Mulyajaya</title>
	</head>
<body >
<center>
	<div id=tblpenduduk>
	<form name=fdata action=upld.php method=post>
	<table>
		<h3 style='color:black'>DATA PENDUDUK</h3>
		<tr>
			<td>NIK</td><td>:<input type=text name=nik placeholder='NIK' maxlength=20 required></td>
		</tr>
		
		<tr>
			<td>No KK</td><td>:<input type=text name=no_kk placeholder='NO.KK' maxlength=20 required></td>
		</tr>
		
		<tr>
			<td>Nama Lengkap</td><td>:<input type=text name=nama placeholder='Nama Lengkap' required></td>
		</tr>
		
		<tr>
			<td>Alamat</td><td>:<input type=text name=almt placeholder='Alamat' required></td>
		</tr>
		
		<tr>
			<td>Provinsi</td><td>:<input type=text name=provinsi placeholder='Provinsi' required></td>
		</tr>
		
		<tr>
			<td>Kabupaten </td><td>:<input type=text name=kabupaten placeholder='Kabupaten' required></td>
		</tr>
		
		<tr>
			<td>Kecamatan</td><td>:<input type=text name=kecamatan placeholder='Kecamatan' required></td>
		</tr>
		
		<tr>
			<td>Kode Pos</td><td>:<input type=text name=kodepos placeholder='Kode Pos' required></td>
		</tr>
		
		<tr>
			<td>Kelurahan</td><td>:<input type=text name=kelurahan placeholder='Kelurahan/Desa' required></td>
		</tr>
		
		<tr>
			<td>RT</td><td>:<input type=text name=rt placeholder='RT' required></td>
		</tr>
		
		<tr>
			<td>RW</td><td>:<input type=text name=rw placeholder=RW required></td>
		</tr>
		
		<tr>
			<td>Jenis kelamin</td>
			<td>:
				<select name=jk>
					<option value=Laki-laki>Laki-laki</option>
					<option value=Perempuan>Perempuan</option>
               </select>
			</td>	
		</tr>
		
		<tr>
			<td>Tempat Lahir</td><td>:<input type=text name=tmplahir placeholder='Tempat Lahir' required></td>
		</tr>
		
		<tr>
			<td>Tanggal Lahir</td><td>:<input type=date name=tgl placeholder='Tanggal Lahir' required></td>		
		</tr>
		
		<tr>
			<td>Golongan Darah</td><td>:<input type=text name=gol_darah placeholder='Golongan Darah' required></td>
		</tr>
		
		<tr>
			<td>Agama</td>
			<td>:
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
			<td>Pendidikan</td>
			<td>:
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
			<td>Pekerjaan</td><td>:<input type=text name=pkrjn placeholder='Pekerjaan' required></td>
		</tr>
		
		<tr>
			<td>Status Kawin</td>
			<td>:
				<select name=stskwn>
					<option value=Kawin>Kawin</option>
					<option value='Belum Kawin'>Belum Kawin</option>
		       </select>
			</td>
		</tr>
		
		<tr>
			<td>Kewarganegaraan</td>
			<td>:
				<select name=kw>
				 <option value=WNI>WNI</option>
				 <option value=WNA>WNA</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>Status penduduk</td>
			<td>:
				<select name=stspnddk>
				 <option value=Daftar>Daftar</option>
				 <option value=Update>Update</option>
			  </select>
			</td>
		</tr>
		
		<tr>
			<td>Nama Ayah</td><td>:<input type=text name=nmayah placeholder='Nama Ayah' required></td>
		</tr>
		
		<tr>
			<td>Nama Ibu</td><td>:<input type=text name=nmibu placeholder='Nama Ibu' required></td>
		</tr>
		
		<tr>
			<td>Status</td>
			<td>:
				<select name=sts>
				<option value=Hidup>Hidup</option>
				<option value=Meninggal>Meninggal</option>
				<option value=Petugas>Petugas</option>
	       </select>
			</td>
		</tr>

		 <tr align='right'>
	  <br><td colspan='2' >
	    <input type=submit value=Simpan>
		<a href=lihat.php>
		   <input  type=button value=Lihat></a>
		   <input type=reset value=Batal>
	    </td></br>
		</tr>
	</table>
</form>
	</div>
	</center>
</body>
</html>";
}
function FormKematian()
{
  echo"
<style type=text/css rel=stylesheet>
				body {
       

	}
		.gb {color:white;}

		select.har:hover
		{background: #9E9E9E;}

		.satu:hover
		{
			color: #01EB93;
		}
		.input {outline:white; border:none; background: #A6FC8C;}
		.inputtt {width: 135px;height: 20px;border: none; outline:white;
					border-bottom: 1px solid;border-collapse: collapse;background: #FFFFFF;font-size: 16px;}
	</style>";
	error_reporting(0);
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$nik = $_POST['nik'];
	$sql=mysqli_query($koneksi,"select * from datapenduduk where nik='$nik'");
	$data = mysqli_fetch_array($sql);

if(!$sql)
{
echo  $data[Namajenazah];
}
$tgl = date("H:i:s");
echo '<body>';
echo '<form name=fkematian action=simpan_kematian.php id="fkematian" method=post>';
echo '<center>';	
echo  '<table>';
		echo  '<tr><td colspan=2 align=center ><h2>Surat Keterangan Kematian</h2></td></tr>';
		echo '<tr><td>NIK</td><td>:<input type=text name=nik onchange="Tampilkan();" value="'.$nik.'" placeholder="Masukan NIK Lalu ENTER" ></td></tr>';
		echo '<tr><td>Nama Lengkap Jenazah</td><td>:<input type=text name=nama value="'.$data["nama"].'" placeholder="Nama Jenazah"></td></tr>';
		echo '<tr>
            <td>Jenis Kelamin </td>
            <td>:<input type=text name=jk value="'.$data["jk"].'" placeholder="Jenis Kelamin">
			</td>
  
		</tr>';
		
		echo '<tr>
		<td>Agama</td>
		<td>:<input type=text name=agama value="'.$data["agama"].'" placeholder=Agama>
			</td>
		</tr>';
		
		echo '<tr>
			<td>Pekerjaan</td>
			<td>:<input type=text name=pekerjaan value="'.$data["pekerjaan"].'" placeholder=Pekerjaan></td>
		</tr>';
		
		echo '<tr>
            <td>Alamat</td>
           <td>:<input type=text name=alamat value="'.$data["alamat"].'" placeholder=Alamat></td>
		</tr>';
		echo '<tr>
            <td></td>
           <td>RT :<input type=text name=rt value="'.$data["rt"].'" placeholder=RT size=3></td>
		</tr>';
		
		echo '<tr>
            <td></td>
           <td>RW:<input type=text name=rw value="'.$data["rw"].'" placeholder=RW size=3></td>
		</tr>';
		
		echo '<tr>
			<td>-</td>
		</tr>';
		
		echo '<tr>
			<td>Telah Meninggal Dunia Pada </td>
			<td>:</td>
		</tr>';
		
		echo '<tr>
            <td>Hari</td>
            <td>:<select id=Hr name="thari" onclick="tampil();">
            <option value="hari">-Pilih-</option>
            <option value="Senin">1</option>
            <option value="Selasa">2</option>
            <option value="Rabu">3</option>
            <option value="Kamis">4</option>
            <option value="Jumat">5</option>
            <option value="Sabtu">6</option>
            <option value="Minggu">7</option>
            <input type=text id=text_hr name="thari" placeholder="Hari" size=5 readonly>
   			</select></td>
		</tr>';
		
			echo '<tr>
            <td>Tanggal Kematian</td>
     		<td>:<input type=date name="tgl" required></td>
       </tr>';
		
			echo '<tr>
            <td>Waktu Kematian</td>
     		<td>:<input type=time name="waktu" Kematian" required></td>
       </tr>';

        echo '<tr>
            <td>Penyebab Kematian</td>
     		<td>:<input type=text name="tsebab" placeholder="Penyebab Kematian" required></td>
       </tr>';
    
     echo '<tr align="right">
	  <br><td colspan="2" >
	    <input type=submit value=Simpan>
		<a href=lihat_kematian.php>
		   <input  type=button value=Lihat></a>
		   <input type=reset value=Batal>
	    </td></br>
	    
</tr>';
	
  echo '</table>';
  echo '</center>';
  echo '</form>';
  echo '</body>';

}
function FormKelahiran()
{
	$this->konekan = new Database;
	$this->konekan->konek();
  error_reporting(0);
  	$nik = $_POST['nik'];
  	$sql=mysqli_query($this->konekan->koneksi,"select * from datapenduduk where nik='$nik'");
  	$data = mysqli_fetch_array($sql);

  if(!$sql)
  {
  echo  $data[nama];
  }
  echo "
    <body>
  	<form name=fkelahiran method=post id='fkelahiran' action=simpankel.php onsubmit='return validasi();'>
  	<center>
  	          <tr>
  				<br><th style='text-align : center;' colspan=2> <u><b>SURAT KETERANGAN PENGANTAR AKTA KELAHIRAN </b></u></th><br>
  				</tr>
  </center>

  	<br><br>
  	 <table align=center>

  				<tr>
  					<td> <b>Dengan ini menerangkan bahwa </b></td>
  					<td>:</td>
  				</tr>
  		</table>

                   <table align=center>

  		<tr>
  			<td>NIK</td>
  		    <td>:<input type=text name=nik onchange='tampill();' value='$nik' maxlength=20 placeholder='Masukin NIK Lalu ENTER'></td>
  		</tr>
  				<tr>
  					<td>Nama Lengkap</td>
  					<td>:<input type=text name=tl value='$data[nama]' placeholder='Nama lengkap'></td>
  				</tr>

  				<tr>
  					<td>Jenis kelamin</td>
  					<td>:<input type=text name=tjk value='$data[jk]' placeholder='Jenis kelamin'></td>
  				</tr>


      <tr>
      <td>Agama</td>
      <td>:<input type=text name=tagama value='$data[agama]' placeholder='Agama'></td>
        </tr>


  				<tr>
  					<td>Tempat lahir</td>
  					<td>:<input type=text name=ttm value='$data[tmplahir]' placeholder='Tempat lahir'></td>
  				</tr>

  	<tr>
  	   <td>Tanggal lahir</td>
         <td>:<input type=date name=tlahir value='$data[tgllahir]' placeholder='Tanggal lahir'></td>

                  <tr>
       <td>Pekerjaan</td>
       <td>:<input type=text name=tker value='$data[pekerjaan]' placeholder='Pekerjaan'></td>
         </tr>


         <tr>
       <td>Alamat</td>
      <td>:<input type=text name=talamat value='$data[alamat]' placeholder='Alamat'></td>
         </tr>


         <tr>
  				<td>Mengajukan Pembuatan AKTA Bagi Anak </td>
  				<td>:</td>
  			</tr>

  			<tr>
  					<td>Nama Anak</td>
  					<td>:<input type=text name=tanak placeholder='Nama lengkap'Required></td>
  				</tr>


                  <tr>
  					<td>Nama Ayah</td>
  					<td>:<input type=text name=tayah value='$data[nama]' placeholder='Nama lengkap'></td>
  				</tr>

                         <td>Nama Ibu</td>
  					<td>:<input type=text name=tibu placeholder='Nama Ibu'Required></td>
  				</tr>


  		<tr>
  	   <td>Masa Berlaku</td>
         <td>
          :<select name='tgl' Required>
          <option value=>tanggal</option>";
          for($a=1; $a<=31; $a++)
          {
  			echo "<option value=$a> $a</option>";
  		}
          echo"</select>

          <select name='bln'>
          <option value=>Bulan</option>";
          for($a=0; $a<=11; $a++)
          {
  			$nama_bulan = array('Januari','Febuari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
  			echo "<option value=$a>$nama_bulan[$a]</option>";
  		}
         echo" </select>

         <select name='thn'>
         <option value=>Tahun</option>";
         for($a=1945; $a<=2030; $a++)
         {
  		   echo "<option value=$a>$a</option>";
  	   }
         echo"</select>

         </td>
      </tr>


                  <table align=center>
  				<tr>
  					<td><input type=submit value=Simpan>
  					<a href=lihat_kelahiran.php?tcari=><input type=button value='Lihat data'></a>
  						<input type=reset value=Batal>
  					</td>
  				</tr>
  				</table>
  			</table>
  			</center>
  	</form>
    </body>
   <script type=text/javascript>
  			function tampill()
  			{
  			var nik = document.fkelahiran.nik.value;

  			document.fkelahiran.nik.value=nik;
  			document.getElementById('fkelahiran').action='';
  			document.getElementById('fkelahiran').submit();
  			}
  			</script>";

}

function FormPindah()
{
echo "<head>
	<style type='text/css' rel=stylesheet>
	h2{padding: 15px 0px 0px 0px;}
	.judul{ background: ; width: 100%; height: 60px;}
	.satu{ background: ; width: 100%;}
	.dua{ background: ; width: 100%; height: 52%;}
	.asal{ margin-right: 90px;}
	</style>	
</head>
<script type=text/javascript>
			function tampil()
			{
			var nik = document.finput.enik.value;
			
			document.finput.enik.value=nik;
			document.getElementById('finput').action='';
			document.getElementById('finput').submit();
			}
</script>";
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	error_reporting(0);
	$nik = $_POST['enik'];
	$sql = mysqli_query($koneksi,"select * from datapenduduk where nik='$nik'");
	$data= mysqli_fetch_array($sql);
	
	echo"
	<body>
	 <form name=finput method=post id='finput' action=simpanSpindah.php>
	   <center>
			<div class=judul><tr><td><h2>SURAT KETERANGAN PINDAH DATANG WNI</h2></td></tr></div>
			
			<div class=satu>
			  <table class=asal>
				<tr>
					<td>Nomor Pindah</td>
					<td>:<input type=text name=nospdh value='$data[nospdh]' maxlength=20></td>
				</tr>
				
				<tr>
					<td>Nomor Nik</td>
					<td>:<input type=text name=enik maxlength=20 placeholder='Masukan NIK Lalu ENTER' onchange='tampil();' value='$data[nik]'></td>
					<td>Nama</td>
					<td>:<input type=text name=enama value='$data[nama]' placeholder='Nama' size=20></td>
				</tr>
				
				<tr><td><h4>DATA DAERAH ASAL</h4></td></tr>
				
				<tr>
					<td>1. Nomor Kartu Keluarga</td>
					<td>:<input type=text name=nokk value ='$data[no_kk]' size=20></td>
				</tr>
				
				<tr>
					<td>2. Alamat</td>
					<td>:<input type=text name=ealamat value='$data[alamat]' size=25></td>
					<td>RT</td>
					<td>:<input type=text name=rt value ='$data[rt]' size=4></td>
					<td>RW</td>
					<td>:<input type=text name=rw value='$data[rw]' size=4></td>
				</tr>
				
				<tr>
					<td>a. Desa/Kelurahan</td>
					<td>:<input type=text name=edesa value ='$data[kelurahan]' size=15></td>
					<td>c. Kab/Kota</td>
					<td>:<input type=text name=ekota value ='$data[kabupaten]' size=15></td>
				</tr>
				
				<tr>
					<td>b. Kecamatan</td>
					<td>:<input type=text name=ekecamatan value ='$data[kecamatan]' size=15></td>
					<td>d. Provinsi</td>
					<td>:<input type=text name=eprovinsi value ='$data[provinsi]' size=15></td>
				</tr>
				
			  </table>
			</div>
			
			<div class=dua>
			  <table>
					<tr><td><h4>DATA KEPINDAHAN</h4></td></tr>
					
				<tr><td>1. Alasan Pindah</td>
					<td>:
						<select name=apindah>
							<option value=''></option>
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
					<td>:<input type=text name=ealamat required maxlength=28></td>
					<td>RT</td>
					<td>:<input type=text name=art required maxlength=4></td>
					<td>RW</td>
					<td>:<input type=text name=arw required maxlength=4></td>
				</tr>
				
				<tr>
					<td>a. Desa/Kelurahan</td>
					<td>:<input type=text name=adesa required maxlength=15></td>
					<td>c. Kab/Kota</td>
					<td>:<input type=text name=akota required maxlength=15></td>
				</tr>
				
				<tr>
					<td>b. Kecamatan</td>
					<td>:<input type=text name=akecamatan required maxlength=20></td>
					<td>d. Provinsi</td>
					<td>:<input type=text name=aprovinsi required maxlength=20></td>
				</tr>
					
				<tr>
					<td>3. Rencana Pindah</td>
					<td>: <input type=date name=srncn required></td>
				</tr>
						
			  </table>
				<tr align=center>
					<td>
						<input type=submit value=Simpan>
						<input type=Reset value=Batal>
						<a href=lihatSpindah.php?tcari=>
						<input type=button value=Lihat>
						</a>
					</td>
				</tr>
			</div>
	   </center>
	 </form>
	</body>
	";
}

function FormKTP(){
 echo" <script>
	function tampil()
	{
		var nik = document.fdata.tnik.value;
		
		document.fdata.tnik.value=nik;
		document.getElementById('fdata').action='';
		document.getElementById('fdata').submit();
	}
 </script>";
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
error_reporting(0);
$nik = $_POST['tnik'];
 $sql = mysqli_query($koneksi,"select * from datapenduduk where nik='$nik'");
 $data= mysqli_fetch_array($sql);
echo "
<body >
	<form name=fdata id=fdata action=simpanKTP.php method=post>
	<h3 align='center' style='color:black'>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</h3></br>
	<center>
	<table>
		<tr>
			<td>NIK</td><td>:<input type=text name='tnik' placeholder='Masukan NIK Lalu ENTER' onchange='tampil();' maxlength=20 value='$data[nik]' ></td>
		</tr>
		
		<tr>
			<td>Nama Lengkap</td><td>:<input type=text name='tnama' placeholder='Nama Lengkap' value='$data[nama]'></td>
		</tr>
		
		<tr>
			<td>Jenis Kelamin </td>
            <td>:<input type=text value='$data[jk]' name='tkelamin' placeholder='Jenis Kelamin'>
       </tr>
       
        <tr>
			<td>Gol Darah</td>
			<td>:<input type=text name='tgold' placeholder='Golongan Darah' value=$data[golongan_darah]></td>
		</tr>
			

		
		<tr>
			<td>Tempat Lahir</td><td>:<input type=text name='tlahir' placeholder='Tempat Lahir' value=$data[tmplahir]></td>
		</tr>
		
		<tr>
			<td>Tanggal Lahir</td>
			<td>:<input type=date name='tgl_lahir' value=$data[tgllahir] placeholder=Tanggal Lahir>	
		</tr>
		
		<tr>
			<td>Kelurahan/Desa</td><td>:<input type=text name='tkeldes' value='$data[kelurahan]' placeholder='Desa'></td>
		</tr>
			
		<tr>
			<td>Kecamatan</td><td>:<input type=text name='tkecamatan' value='$data[kecamatan]' placeholder='Kecamatan'></td>
		</tr>	
						
		<tr>
			<td>Provinsi</td><td>:<input type=text name='tprovinsi' value='$data[provinsi]' placeholder='Provinsi'></td>
		</tr>
		
		<tr>
			<td>Pendidikan</td>
			<td>:
				<input type=text name='tpdk' value='$data[pendidikan]' placeholder='Pendidikan'>
				
			</td>
		</tr>
		
		<tr>
			<td>Status Kawin</td>
			<td>:<input type=text name='tkawin' value='$data[statuskawin]' placeholder='Status Kawin'></td>
		</tr>
		
		<tr>
			<td>Agama</td>
			<td>:
				<input type=text name='tagama' value='$data[agama]' placeholder='Agama'>
					
			</td>
		</tr> 
		
		
		<tr>
			<td>Pekerjaan</td><td>:<input type=text name='tpkr' placeholder='pekerjaan' value=$data[pekerjaan]></td>
		</tr>
		
		
		<tr>
			<td>Alamat</td><td>:<input type=text name='talamat' placeholder='alamat' value=$data[alamat]></td>
		</tr>
		
		<tr>
			<td>RT</td><td>:<input type=text name='rt' placeholder='RT' value=$data[rt]></td>
		</tr>
		<tr>
			<td>RW</td><td>:<input type=text name='rw' placeholder='RW' value=$data[rw]></td>
		</tr>
		
		<tr>
			<td>Kode Pos</td><td>:<input type=text name='tpos' placeholder='Kode Pos' value=$data[kode_pos]></td>
		</tr>
		
		<tr>
			<td>Kewarganegaraan</td>
			<td>:
				<input type=text name='tkw' value='$data[kewarganegaraan]' placeholder='Kewarganegaraan'>
			</td>
		</tr>
		
		<tr>
			<td>Nama Ayah</td><td>:<input type=text name='nmayah' placeholder='nama ayah' value=$data[namaayah]></td>
		</tr>
		
		<tr>
			<td>Nama Ibu</td><td>:<input type=text name='nmibu' placeholder='nama ibu' value=$data[namaibu]></td>
		</tr>
		
		<tr>
			<td>Tanggal Pengajuan</td><td>:<input type=date name='tgl_pengajuan' recuired></td>
		</tr>
		
		<tr>
			<td>Tanggal Pengesahan</td><td>:<input type=date name='tgl_pengesahan' required></td>
		</tr>
		
		<tr>
			<td>Keterangan</td><td>:<input type=text name='tket' placeholder='Keterangan' required></td>
		</tr>
		<tr align='center'>
			<td colspan='2'>
			<input type=submit value=Simpan>
			<a href=lihatktp.php?tcari=>
			<input type=button value=Lihat></a>
			<input type=reset value=Batal>
			</td>
		</tr>
		
	</table>
	</center>
</form>
</body>";

}

function FormKelolaPetugas(){
echo "<body>
	<form name=flog action='login.php' method=post onsubmit='return validasi();'><br>	
	<b><h3 style='color:black'>Data Petugas</h3></b>
	<center><table>
    <tr><td>Username</td>
    <td><input type='text' placeholder='Enter Username' name='username' ></td>
    </tr>

    <tr>
	<td>Password</td>
	<td><input type='password' placeholder='Enter Password' name='password' ></td>
	</tr></br>

	<tr>
	<td><button type=submit>Simpan</button></td>
	<td><input type=reset value=Batal></button>
	<a href='lihatpetugas.php?tcari=' target='satu'><input type=button value=Lihat></a></td>
	</tr>
</table>
</form>";

}
}
?>
</body>
</html>
