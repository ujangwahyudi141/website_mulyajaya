<?php
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$k = $_GET['kunci'];
$sql = mysqli_query($koneksi,"select * from kematian1 where nik ='$k'");
	$data = mysqli_fetch_array($sql);
echo '<div class="panel-body">';
echo '<form name="form" method="POST" action="simpan_ubahkematian.php">';

echo '<center><table>
		
		
				<tr>
				<br><td  colspan=2 align=center ><b><u>FORM EDIT SURAT KEMATIAN</u></b></td></br>
				</tr>	
				
				<tr>
					<td>NIK</td>
					<td>:<input type=text value ="'.$data['nik'].'" name=nik readonly></td>
				</tr>
			  
			  <tr>
				<td>Hari</td>
				<td>:<input type=text value ="'.$data['Hari'].'" name="thari" ></td>
			  </tr>
			  
				
			  
			  <tr>
				<td>Tanggal</td>
				<td>:<input type=date value ="'.$data['Tanggal'].'" name="tgl"></td>
			  </tr>
			  
			  <tr>
			  <td>Waktu</td>
			  <td>:<input type=time value ="'.$data['Waktu'].'" name="waktu"></td>
			  </tr>
			 
			  <tr>
			  <td>Penyebab</td>
			  <td>:<input type=text value ="'.$data['Penyebab'].'" name="tsebab"></td>
			  </tr>
			  
			 
			  <tr>
				<td colspan=2 align=left >
				<input  type=submit value=Simpan>
				<a href=lihat_kematian.php>
					<input  type=button value=Batal>
				</a>
			  </tr>
	</table>';
echo '</form>';
?>