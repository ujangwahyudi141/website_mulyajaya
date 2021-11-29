<!DOCTYPE html>
<title>Desa Mulyajaya</title>
 	
 	<link rel="stylesheet" href="style/css.css" type="text/css">
	
	<link type=text/css href="style/imageslider.css" rel=stylesheet>
	
<body oncontextmenu="return false">
<?php
echo '<div id="wrapper">';
    echo '<div id="header" align=center>';
		echo '<img src="img/logo11.png" class=logo><br>';
		echo '<a href="" class="stmik">Desa MulyaJaya</a><br>';
		echo '<a href="" class="stmik">Kecamatan Kutawaluya</a><br>';
		echo '<a href="" class="stmik">Kabupaten Karawang</a><br>';
		
	echo '<div id=nav_menu>';
		echo '<table >';
        echo '<tr>';
				echo '<td id=menu><a href="">HOME</a></td>';
				echo '<td id=menu>';
				echo 'PROFIL';
					echo '<table id=mennu1 height=95px>';
						echo '<tr>';
						echo '<td><a href="#pemerintahan">Pemerintahan Desa</a></td></tr>';
						echo '<tr><td><a href="#profil">Profil Desa</a></td></tr>';
						echo '<tr><td><a href="#lokasi">Lokasi</a></td></tr>';
						
					echo '</table>';
				echo '</td>';
				
				echo '<td id=menu>';
				echo 'KELEMBAGAAN';
					echo '<table id=mennu1 height=170px>';
							echo '<td><a href="#kelembagaandesa">LPMD</a></td></tr>';
							echo '<td><a href="lpmd.php">Karang Taruna</a></td></tr>';
					        echo '<td><a href=>LINMAS</a></td></tr>';
					        echo '<td><a href=>RT/RW</a></td></tr>';
					        echo '<td><a href=>PKK</a></td></tr>';
					echo '</table>';
				echo '</td>';
				
				echo '<td id=menu>
					<a href="sistemadministrasidesa.php"><b>PELAYANAN</b></a></td>';
				
				echo '<td id=menu>';
				echo 'STATISTIK';
				echo '<table id=mennu1 height=140px>';
						echo '<tr><td><a href="#jumlahpdk">Jumlah Penduduk</a></td></tr>';
					    echo '<tr><td><a href=>Pendidikan</a></td></tr>';
					    echo '<tr><td><a href=>Pekerjaan</a></td></tr>';
					    echo '<tr><td><a href=>Agama</a></td></tr>';
				echo '</table>';
				echo '</td>';
				
				echo '<td id=menu><a href=>POTENSI DESA</a></td>';
				
				echo '<td id=menu>';
				echo 'DATA DESA';
				echo '<table id=mennu1 height=140px>';
						echo '<tr><td><a href=>Laporan Bulanan</a></td></tr>';
					    echo '<tr><td><a href=>Monografi Desa</a></td></tr>';
					    echo '<tr><td><a href=>Download</a></td></tr>';
					    echo '<tr><td><a href=>DPT</a></td></tr>';
				echo '</table>';
				echo '</td>';
				
				echo '<td id=menu>';
				echo 'BERITA';
				echo '<table id=mennu1 height=110px>';
						echo '<tr><td><a href=>Berita Karawang</a></td></tr>';
					    echo '<tr><td><a href=>Berita Nasional</a></td></tr>';
					    echo '<tr><td><a href=>Kegiatan Desa</a></td></tr>';
				echo '</table>';
				echo '</td>';
		
				echo '<td id=menu><a href=>REGULASI</a></td>';
				echo '<td id=menu><a href=""><b>SEARCH</b></a></td>';
				
				
				echo '</table>';
				echo '</td>';

			echo '</tr>';
		echo '</table>';
	echo '</div>';
       
    echo '</div>';

    //imgslide
    echo '<div id="slideshow">';
	echo '<figure>';
			echo '<div class="slide"><img src="img/gerbang.JPG" style="width:20%; height:525px;"></div>';
			echo '<div class="slide"><img src="img/kantor1.JPG" style="width:20%; height:525px;"></div>';
			echo '<div class="slide"><img src="img/kantor2.JPG" style="width:20%; height:525px;"></div>';
			echo '<div class="slide"><img src="img/kantor3.JPG" style="width:20%; height:525px;"></div>';
			echo '<div class="slide"><img src="img/gambar3.jpg" style="width:20%; height:525px;"></div>';
			
	echo '</figure>';
	echo '</div>';
 
 	// content/isi
 	echo "
		 <div id='content'>
		 </div>";

		 //pop
	echo "	 <div id='pemerintahan'>
			<div class='window'>
			<a href='#'' class='close-button' title='Close'>X</a>
	<table>
	<tr>
	<h2 style='font-family: arial; color:blue;'><br>Struktur Organisasi Desa Mulyajaya</h2><br>
	<img src='img/Strukturdesa.png'  style='width:100%; height:380px;'>
		<div id=a style='background:#DFDCDC; padding:5px;'>
<h3 style='color:black; font-family:arial;'>KEPALA DESA</h3>
</div>
<div id=c>
			<td style='padding-top:30px; font-family:arial; width:50%; height:200px; border:1px solid yellow;'>
				<h2 style='text-align:center;  color:red;'>Kepala Desa</h2><br>
				<img src='img/lurah.png' style='width:50%; height: 400px; padding-left:10px;'>
				<p style='float:right;color:gray; padding-top:10px;'>
Profile<br>
<br>
Nama : Drs. Jansuar<br>
T.T Lahir : Slt. Panjang, 29 – 01 – 1966<br>
Alamat : Jl. LKMD Dusun II Pedekik<br>
Mulai menjabat :   Agustus 2017<br>
No. Telp :<br>
				</p>
			</td>
			<td  width : 50%; height:200px; style='background:#B6ECB6; padding-left:10px;'>
			<p>
				
<h5 style='color:red; padding-top:0px;'>TUGAS KEPALA DESA</h5><br>

Menyelenggarakan Pemerintahan Desa, melaksanakan Pembangunan Desa, pembinaan kemasyarakatan Desa, dan pemberdayaan masyarakat
Desa.<br>
<br>
<h5 style='color:red;'>FUNGSI KEPALA DESA</h5><br>
<p>1. Menyelenggarakan pemerintahan desa berdasarkan kebijakan yang ditetapkan bersama BPD</p><br>
<p>2. Mengajukan rancangan peraturan Desa</p><br>
<p>3. Menetapkan peraturan-peraturan yang telah mendapatkan persetujuan bersama BPD</p><br>
<p>4. Menyusun dan mengajukan rancangan peraturan desa mengnenai APB Desa untuk dibahas dan ditetapkan bersama BPD</p><br>
<p>5. Membina kehidupan masyarakat Desa</p><br>
<p>6. Membina ekonomi desa</p><br>
<p>7. Mengordinasikan pembangunan desa secara partisipatif</p><br>
<p>8. Mewakili desanya di dalam dan luar pengadilan dan dapat menunjuk kuasa hukum untuk mewakilinya sesuai dengan paeraturan perundang-undangan; dan</p><br>
<p>9. Melaksanakan wewenang lain sesuai dengan peraturan perundang-undangan.</p><br>

			</p>
			</td>
		</tr>
	</table>
</div>

<div id=d style='background:#DFDCDC; padding:5px;'>
<h3 style='color:gray; font-family:arial; padding-top:10px; padding-bottom:10px;'>SEKRETARIS DESA</h3>
</div>
<div id=c>
 <h2 style='font-family:arial; color:#0DC58C; padding-top:50px; padding-left:50px;'><i>Tiada sukses tanpa disiplin, disiplin itu ringan bagi yang terbiasa.</i></h4>
<table>
		<tr>
			<td style='padding-top:30px; font-family:arial; width:50%; height:200px;'>
				<h2 style='text-align:center;  color:red;'>Tugas Dan Fungsi Sekretaris Desa</h2><br>
				<p style='float:right;color:gray; padding-top:275px;'>
				

<h5 style='text-align:center;'>PERMENDAGRI No. 84 Tahun 2015
<br>
Pasal 7</h5><br>

(1) Sekretaris Desa berkedudukan sebagai unsur pimpinan Sekretariat Desa.<br>
<br>
(2) Sekretaris Desa bertugas membantu Kepala Desa dalam bidang administrasi pemerintahan.<br>
<br>
(3) Untuk melaksanakan tugas sebagaimana yang dimaksud pada ayat (2), Sekretaris Desa mempunyai fungsi:<br>
<br>
a) Melaksanakan urusan ketatausahaan seperti tata naskah, administrasi surat menyurat, arsip, dan ekspedisi.<br>
<br>
b) Melaksanakan urusan umum seperti penataan administrasi perangkat desa, penyediaan prasarana perangkat desa dan kantor, penyiapan rapat, pengadministrasian aset, inventarisasi, perjalanan dinas, dan pelayanan umum.<br>
<br>
c) Melaksanakan urusan keuangan seperti pengurusan administrasi keuangan, administrasi sumber-sumber pendapatan dan pengeluaran, verifikasi administrasi keuangan, dan admnistrasi penghasilan Kepala Desa, Perangkat Desa, BPD, dan lembaga pemerintahan desa lainnya.<br>
<br>
d) Melaksanakan urusan perencanaan seperti menyusun rencana anggaran pendapatan dan belanja desa, menginventarisir data-data dalam rangka pembangunan, melakukan monitoring dan evaluasi program, serta penyusunan laporan.<br>


</p>
			</td>
			
			<td style='padding-top:30px; font-family:arial; width:50%; height:200px; border:1px solid yellow;'>
				<h2 style='text-align:center;  color:red;'>Sekretaris Desa</h2><br>
				<img src='../img/lurah.png' style='width:50%; height: 400px; padding-left:10px;'>
				<p style='float:right;color:gray; padding-top:275px;'>
Profile<br>
<br>
Nama : Drs. Jansuar<br>
T.T Lahir : Slt. Panjang, 29 – 01 – 1966<br>
Alamat : Jl. LKMD Dusun II Pedekik<br>
Mulai menjabat :   Agustus 2017<br>
No. Telp :<br>
				</p>
			</td>
		
	
		</tr>
	</table>
</div>
	
    </div>
    </div><br><br>";

//popup2
echo "	 <div id='profil'>
			<div class='window'>
			<a href='#'' class='close-button' title='Close'>X</a>
			<div id=judul>
	<h3>Visi Dan Misi Desa Mulyajaya</h3>
	</div><div id=berita>
	
	</div>
<div id=gambar style='width:100%; height:600px;'>
	<img src='img/sekolah.JPG' style='width:100%; height:600px;'>
</div>

	<div id=visi style='position:relative;'>
	
<h1 style='text-align:center; font-family:arial; color:blue;'><br>VISI</h1><br>
<p style='text-align:center; font-family:arial; margin-top:0px; padding-bottom:15px; color:red'>	
Terbangunnya Tata Kelola Pemerintahan Desa yang baik dan bersih guna terwujudnya
 kehidupan masyarakat desa yang adil,
 makmur dan sejahtera serta berbudaya dan berakhlaq mulia</p>
	</div>
<div id=garis1>
</div>
		<div id=misi>
			<h1 style='text-align:center; font-family:arial; color:blue;'><br>Misi</h1>
	<p style='text-align:left; font-family:arial; margin-top:0px; padding-bottom:15px; color:blue'>

    Meningkatkan tata pemerintahan yang demokratis, trasparan, akuntabel, efisien dan efektif<br>
    Meningkatkan perekonomian pedesaan yang memiliki daya saing berbasis pada BUMDes dan Teknologi, baik pertanian, perikanan, perkebunan dan home industry<br>
    Meningkatkan sumber daya manusia yang sehat (kesehatan), cerdas (Pendidikan), agamis (Keagamaan), dan bermoral (Budaya)<br>
    Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan berkualitas<br>
    Meningkatkan Peran Kelembagaan dan Masyarakat Desa dalam mendorong pembangunan Desa<br>
    Meningkatkan system keamanan lingkungan masyarakat desa<br>

</p>
		</div>
<div id=garis1>
</div>
		<div id=arah>
			<h1 style='text-align:center; font-family:arial; color:blue;'><br>Arah dan Kebijakan</h1>
		<p style='text-align:left; font-family:arial; margin-top:0px; padding-bottom:15px;'>

1. Meningkatkan tata pemerintahan yang demokratis, trasparan, akuntabel, efisien dan efektif. <br>
<br>
Rumusan Arah Kebijakan :<br>
<br>
    Peningkatan Kapasitas Aparatur Pemerintahan Desa<br>
    Peningkatan beban kerja dan penghasilan Penyelengara Pemerintahan Desa<br>
    Pengembangan Standar Playanan Minimal Desa<br>
    Pengembangan Sistem Informasi Desa dan Taransparansi Kegiatan<br>
    Pengembangan Sistem Keuangan Desa<br>
    Peningkatan Peraturan di Desa<br>
    Peningkatan Sarana dan Prasarana serta pemeliharaan aset Pemerintahan Desa<br>
<br>
2. Meningkatkan perekonomian pedesaan yang memiliki daya saing berbasis pada BUMDes danTeknologi, baikpertanian, perikanan, perkebunan dan home industry.<br>
<br>
Rumusan Arah Kebijakan :<br>
<br>
    Pengembangan BUM Desa dan Lembaga Ekonomi Desa<br>
    Peningkatan Pengelolaan pertanian;<br>
    Peningkatan Pengelolaan Perkebunan<br>
    Peningkatan Pengelolaan Home Industry<br>
    Peningkatan Kerjasama antar Desa dan Pihak Ketiga<br>
<br>
3. Meningkatkan sumber daya manusia yang sehat (kesehatan), cerdas (Pendidikan), agamis (Keagamaan), dan bermoral (Budaya).<br>
<br>
Rumusan Arah Kebijakan :<br>
<br>
    Peningkatan kesehatan lingkungan dan masyarakat;<br>
    Peningkatan dan Pengembangan pendidikan.<br>
    Penguatan Pembinaan KeagamaandanIrmas<br>
    Penguatan Kelembagaan adat dan Budaya<br>
<br>
4. Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan berkualitas.<br>
<br>
Rumusan Arah Kebijakan :<br>
<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatan BUMDes<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatanpemudadanolah raga<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatan kesehatan<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatan budaya dan pendidikan<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatan ekonomi produktif<br>
    Peningkatan Sarana dan Prasarana Infrastruktur serta pemeliharaan kegiatan lingkungan masyarakat dan lingkungan hidup<br>
    Peningkatan sarana dan prasarana infrastruktur serta pemeliharaan kegiatan keamanan desa<br>
<br>
5. Meningkatkan Peran kelembagaan dan Masyarakat Desa dalam mendorong pembangunan Desa.<br>
<br>
Rumusan Arah Kebijakan :<br>
<br>
    Peningkatan pembinaan kelembagaan Desa<br>
    Peningkatan kapasitas dan pelatihan masyarakat Desa<br>
    Peningkatan kapasitas dan pelatihan kelompok masyarakat<br>
<br>
6. Meningkatkan system keamanan lingkungan masyarakat desa.<br>
<br>
Rumusan Arah Kebijakan:<br>
<br>
    Peningkatan dan penguatan satlinmas dan siskamling desa<br>
    Peningkatan dan pelatihan satlinmas<br>

</p>
</div>
	
    </div>
    </div><br><br>";

//popup3
echo "	 <div id='kelembagaandesa'>
			<div class='window'>
			<a href='#'' class='close-button' title='Close'>X</a>

			<div style='width:100%; height:50px;'>
	<h3 style='text-align:left; padding-left: 5px; padding-top: 10px; background:gray;'>Lembaga Pemberdayaan Masyarakat Desa (LPMD)</h3>
<div style='background:white; width:100%; height:auto;'>
	<h1 style='color:blue; text-align:center;'>Lembaga Pemberdayaan Masyarakat Desa</h1>
	<div style='width:300px; padding-left:50px;padding-top:30px;float:left;'>
		<h4 style='text-align:center;background:gray;'>Ketua LPMD</h4>
			<br>
			Nama : AFIFUDIN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:300px; margin-left:15px; padding-right:40px; padding-top:30px;float:right;'>
		<h4 style='text-align:center;background:gray;'>SEKERTARIS LPMD</h4>
			<br>
			Nama : AFIFUDIN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:300px; padding-left:10px;padding-top:30px; float:right;'>
		<h4 style='text-align:center;background:gray;'>BENDAHARA LPMD</h4>
			<br>
			Nama : AFIFUDIN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
</div>
<div id=vimisilpmd style='text-align:center;'>
	<img src='img/vimisilpmd.png' style='width:90%; height:auto;'>
</div>
<div id=anggota1 style='width:100%; height:50px;float:left;'>
		<div style='width:350px; padding-left:30px;padding-top:30px;float:left;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : Adi<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:360px; padding-left:10px; padding-right:10px; padding-top:30px;float:right;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : AFIFUDINT<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:350px; padding-left:10px;padding-top:30px; float:right;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : AFIFUDINN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
<div id=anggota2 style='width:100%; height:50px;float:left;'>
	<div style='width:350px; padding-left:30px;padding-top:30px;float:left;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : Adi<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:360px; padding-left:10px; padding-right:10px; padding-top:30px;float:right;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : AFIFUDIN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
	<div style='width:350px; padding-left:10px;padding-top:30px; float:right;'>
		<h4 style='text-align:center;background:gray;'>ANGGOTA LPMD</h4>
			<br>
			Nama : AFIFUDIN<br>
			<br>
			Tempat Lahir : Pedekik<br>
			<br>
			Tanggal Lahir : 15 – 10- 1973<br>
			<br>
			Pendidikan : S 1<br>
			<br>
			Alamat : Dusun cibanteng II<br>
	</div>
<div id=tugaslpmd>
	<center>
		<img src='img/tugaslpmd.png' style='width:90%; height:auto;'>
	</center>
</div>
</div>


	</div>
    </div></div>
    <br><br>";


    //pop4
    echo "	 <div id='jumlahpdk'>
			<div class='window'>
			<a href='#'' class='close-button' title='Close'>X</a>
			<div id=tabel style='border-top:1px solid red;padding-top:10px;'>
<center>
	<table border=1px style='width:900px; height:300px;'>
	<h3 style='text-align:center; padding-left: 5px; padding-top: 10px;'>Jumlah Data Penduduk</h3></br>
		<tr>
			<th>Penduduk</th>
			<th>Jumlah</th>
		</tr>
		
		<tr>
			<td>Jumlah Laki-laki(orang)</td>
			<td>760</td>
		</tr>
		
		<tr>
			<td>Jumlah Perempuan(orang)</td>
			<td>70</td>
		</tr>
		
		<tr>
			<td>Jumlah Laki-laki(orang)</td>
			<td>30</td>
		</tr>
		
		<tr>
			<td>Jumlah Total</td>
			<td>80</td>
		</tr>
		
		<tr>
			<td>Jumlah Kepala Keluarga(KK)</td>
			<td>88</td>
		</tr>
	</table>
</center>
</div>
			</div></div></div>
    <br><br>";


	//lokasi
    echo "<section id=lokasi>
   <div id=peta>
   <center><h1>Lokasi Desa MulyaJaya</h3></center>
<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.551433238532!2d107.31698114977316!3d-6.190724662353266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e697f39fd5c0e39%3A0x8f0020bc11c53ca2!2sKantor+Kepala+Desa+Mulyajaya!5e0!3m2!1sid!2sid!4v1546412279327' width='100%' height='450' frameborder='0' style='border:0; padding:20px;' allowfullscreen></iframe>
</div>
<section>
 ";
   
   //footer
    echo '<div id="footer">';
    echo '&copy; STMIK KHARISMA KARAWANG 2019';
echo '</div>';



?>	