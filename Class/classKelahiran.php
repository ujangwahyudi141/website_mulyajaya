<?php
require_once "classDatabase.php";
class Kelahiran
{
	var $nik, $nama_anak, $nama_ibu, $berlaku;
function disimpan()
{
	$this->konekan = new Database;
	$this->konekan->konek();
	$this->nik 				= $_POST['nik'];
  	$this->nama_anak		= $_POST['tanak'];
  	$this->nama_ibu			= $_POST['tibu'];
  	$this->berlaku			= $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
   
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
				window.location = 'FormKelahiran.php';
			 </script>";
			
			
			 }
			 else{
			 	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
				$masuk= mysqli_query($this->konekan->koneksi, "insert into kelahiran set nik   = '$this->nik',
	                                       nama_anak                       = '$this->nama_anak',
	                                       nama_ibu                        = '$this->nama_ibu',
	                                       berlaku                         = '$this->berlaku'");
				 
			 } 
			 if ($masuk){
			 	echo "<script> alert('Data Berhasil di Simpan');
				 	window.location = 'lihat_kelahiran.php';
				 	</script>";
			 }



   	/*
	$qcek = mysqli_query($this->konekan->koneksi, "select *from kelahiran where nik='$this->nik'");
	$jml  = mysqli_num_rows($qcek);
	echo $jml;
	   
	  if ($jml==1)
	   {
		   echo "<script>
		         alert('Data sudah pernah dimasukan ke tabel');
		         window.location = 'kelahiran.php';
		         </script>";
	   }
	   else
	   {
	   $masuk= mysqli_query($this->konekan->koneksi, "insert into kelahiran set nik   = '$this->nik',
	                                       nama_anak                       = '$this->nama_anak',
	                                       nama_ibu                        = '$this->nama_ibu',
	                                       berlaku                         = '$this->berlaku'");
	                                       
	                                       
	                                       
	       if($simpankel)
	       {
			   echo"<script>
					alert('Data berhasil disimpan');
					window.location = 'lihat_kelahiran.php';
					</script>"; 
		 }                                   
	  }*/
}

function dimutahirkan()
{
	$nik           = $_POST['nik'];
  $nama 		= $_POST['tl'];
  $jk	 		= $_POST['tjk'];
  $agama		= $_POST['tagama'];
  $tmplahir 	= $_POST['ttm'];
  $tgllahir 	= $_POST['tlahir'];
  $pekerjaan 	= $_POST['tker'];
  $alamat 	    = $_POST['talamat'];
  $anak         = $_POST['tanak'];
  $ayah         = $_POST['tayah'];
  $ibu          = $_POST['tibu'];
  $berlaku      = $_POST['tber'];
 $this->konekan = new Database;
	$this->konekan->konek();
    $update = mysqli_query($this->konekan->koneksi,"update datapenduduk p, kelahiran k
                                     set   p.nama	   		    ='$nama',
										   p.jk 		        ='$jk',
										   p.agama			    ='$agama',
	                                       p.tmplahir	        ='$tmplahir',
										   p.tgllahir	        ='$tgllahir',
										   p.pekerjaan		    ='$pekerjaan',
										   p.alamat 		    ='$alamat',
	                                       k.nama_anak          = '$anak',
	                                       p.nama               = '$ayah',
	                                       k.nama_ibu           ='$ibu',
	                                       k.berlaku            = '$berlaku'
                                           where p.nik='$nik'");					               
		    if($update)
		    {
			 echo"
			     <script>
		                alert('Berhasil Dimuktahirkan');
		                window.location = 'lihat_kelahiran.php';
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

	$this->konekan = new Database;
	$this->konekan->konek();
	error_reporting(0);
	$kunci = $_GET['tcari'];
	$qlihat=mysqli_query($this->konekan->koneksi,"select p.nik, p.nama , p.jk,p.agama, p.tmplahir, p.tgllahir, p.pekerjaan,
								p.alamat, k.nama_anak,p.nama, k.nama_ibu,k.berlaku from datapenduduk p, kelahiran k
								where p.nik=k.nik");
	$jb = mysqli_num_rows($qlihat);	
	echo"<br>";
	echo "<h4 align=center >DATA KELAHIRAN</h4>";
	echo"<form name=fcari action=cari.php method=get>
				 <input type=submit value=Cari >
				 <input type=text name=tcari placeholder='NIK'>	
				</form>	";
	echo "<div style='float:center'>
	             
	             <a href = FormKelahiran.php style='text-decoration:none;'>	
				 <input type=submit value=kembali>
	
		 </div>";
		
	echo "<table align=center>";
	echo " <tr ><th>No</th>
	              <th>No KTP/NIK</th>
				  <th>Nama lengkap</th>
				  <th>Jenis kelamin</th>
				  <th>Agama</th>
				  <th>Tempat lahir</th>
				  <th>Tanggal lahir</th>
				  <th>pekerjaan</th>
				  <th>Alamat</th>
				  <th>Nama Anak</th>
				  <th>Nama Ayah</th>
				  <th>Nama Ibu</th>
				  <th>berlaku</th>
				  <th>Transaksi</th>
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
				  <td><a href = editkel.php?kunci=$data[0]>edit</a>
				        |<a href = cetakkel.php?kunci=$data[0] target=BLANK>Cetak</a>
						</td>
				  	";		
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
				  <td><a href = editkel.php?kunci=$data[0]>edit</a> 
				         |<a href = cetak.php?kunci=$data[0] target=BLANK>Cetak</a>
						</td>
				  	";
	  }
	 }			  	
	echo "</table>";
}
function cetak()
{
echo"
	<style>
    .a{outline:none; border:none; background:white;}
    #header	{
	width : 90%;
	height: 100px;
	text-align : center;
	}

*{margin:0; padding:0;}
#header > .logo {
	width : 250px;
	height: 115%;
	}
	.text_content{
				text-indent: 30px;
			}
			.inputt {width:500px;height: 10px;border: none; outline:none;
					border-bottom: 1px solid;border-collapse: collapse;background: #FFFFFF;font-size: 16px;}
</style>";
$this->konekan = new Database;
$this->konekan->konek();
$kunci = $_GET['kunci'];
	
	$update = mysqli_query($this->konekan->koneksi,"select p.nik, p.nama , p.jk,p.agama, p.tmplahir, p.tgllahir, p.pekerjaan,
								p.alamat, p.nama,
								k.nama_anak, k.nama_ibu,k.berlaku from datapenduduk p, kelahiran k
								where p.nik=$kunci and p.nik=k.nik");
	$data = mysqli_fetch_array($update);
	echo "<form name=fkelahiran kelahiran.php action=cetak.php method=post>";
	echo "<div id=header>  
		<img src='img/logo.png' class=logo>
	</div>";
	echo"<center>
	<input class=inputt type='text' readonly><br>
	          <tr>
				<th style='text-align : center;' colspan=2> <u><b>SURAT KETERANGAN PENGANTAR AKTA KELAHIRAN :</b></u></th><br>
				</tr>
				
	 <tr>
     <th style='text-align : center;' colspan=2 >Nomor : 474/01/pem./2019</th><br>
     </tr>
          </center>
    

	<center>
	 <table>

	 <tr>
     <th colspan=2>Yang bertanda tangan di bawah ini </th>
     </tr>
 <tr>
     <td>Nama</td>
     <td>: Endang.Amd,komp</td>
  </tr>
      
      <tr>
     <td>Jabatan</td>
     <td>: Kepala Desa Mulyajaya</td>
  </tr>

   
  <tr>
     <td>Alamat</td>
      <td>: Desa Mulyajaya</td>
      </tr>
      
      <tr>
    <td></td>
     <td>RT 001/001</td>
 </tr>

  <tr>
    <td></td>
     <td>Kec.Kutawaluya</td>
 </tr>

                <tr>
	 				<td align=center colspan=2 > <b>Dengan ini menerangkan bahwa </b></td>
				</tr>

                     <tr>
				     <td>No KTP/NIK</td>
				     <td>:<input type=text class=a value='$data[nik]' name='nik' readonly></td>
			       </tr>
			  
			  <tr>
			<td>Nama lengkap</td>
			<td>:<input type=text class=a  value='$data[nama]' name='tnama' readonly></td>
			  </tr>
			  
				   <tr>
				<td>Jenis kelamin</td>
				<td>:<input type=text class=a  value='$data[jk]' name='tjk' readonky></td>
			       </tr>
			  
			            <tr>
				             <td>Agama</td>
				             <td>:<input type=text class=a  value='$data[agama]' name='tagama' readonly></td>
			            </tr>
			  
			     <tr>
				    <td>Tempat lahir</td>
				    <td>:<input type=text class=a  value='$data[tmplahir]' name='tlahir' readonly></td>
			     </tr>
			  
	   <tr>
            <td>Tanggal Lahir</td>
            <td>:<input type=text class=a  value='$data[tgllahir]' name='ttgl' ></td>
       </tr>
            
                <tr>
                    <td>Pekerjaan</td>
                    <td>:<input type=text class=a  value='$data[pekerjaan]' name='tker' ></td>
                </tr>
               
                         <tr>
					         <td>Alamat</td>
					         <td>:<input type=text class=a  value='$data[alamat]' name='talamat'  ></td>
		       		     </tr>

		       		     <tr>
				<th align=right colspan=2>Menngajukan Pembuatan AKTA kelahiran Bagi Anak</th>
		      </tr>
		       		
		      <tr>
				<td>Nama Anak</td>
				<td>:<input type=text class=a  value='$data[nama_anak]' name='tanak'  ></td>
		      </tr>

                                   <tr>
					        <td>Nama Ayah</td>
					        <td>:<input type=text class=a  value='$data[nama]' name='tayah' ></td>
		       		               </tr>

                        <tr>
					        <td>Nama Ibu</td>
					        <td>:<input type=text class=a  value='$data[nama_ibu]' name='tibu' ></td>
		       		               </tr>
                     
       
                        <tr>
					        <td>Masa berlaku</td>
					        <td>:<input type=text class=a  value='$data[berlaku]' name='tber' ></td>
		       		    </tr>

             <tr>
	 				<td colspan=2> <b>Demikian Surat Keterangan ini dibuat untuk digunakan seperlunya. </b></td>
				</tr>
                    
                             <tr>
					        <td colspan=2 align=right>Dibuat di
					        :Mulyajaya</td>
					         </tr>

					         <tr>
					        <td colspan=2 align=right><u>Pada tanggal :
					        </td>
					         </tr>
    

                
					         <tr>
					         <td>Tanda tangan pemegang
					        <td colspan=2 align=right>Kepala Desa Mulyajaya
					        </td>
					         </tr>
		<tr>
			<td>.</td>
		</tr>
		<tr>
			<td>.</td>
		</tr>
					         <tr>
					         <td>(......................)
					        <td colspan=2 align=right>( ENDANG )</td>
					         </tr>
					         
					         <tr>
					          <td colspan=2 align=center>Mengetahui:</td>
					         </tr>
					         
					         <tr>
								<td colspan=2 align=center>Camat Kutawaluya</td>
					         </tr>
					         
					         <tr>
								<td>.</td>
					         </tr>
					         
					         <tr>
								<td>.</td>
					         </tr>
					         
					         <tr >
								<td colspan=2 align=center>(.......................)</td>
					         </tr>
       </table>
	      </center>
	      </form>";
    echo "<script>
		  window.print();
	      </script>";

	}
}
?>
