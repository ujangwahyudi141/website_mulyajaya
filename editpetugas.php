<?php
$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
$k = $_GET['kunci'];
$sql = mysqli_query($koneksi,"select * from datapenduduk where nik ='$k'");
	$data = mysqli_fetch_array($sql);
echo '<div class="panel-body">';
echo '<form name="form" method="POST" action="simpan_ubahpetugas.php">';

echo '<center><table>
		
		
				<tr>
				<br><td  colspan=2 align=center ><b><u>FORM EDIT DATA PETUGAS</u></b></td></br>
				</tr></br>	
			  
			  <tr>
				<td>Nama</td>
				<td>:<input type=text value ="'.$data['nama'].'" name="tnama" ></td>
			  </tr>
			  
			  <tr>
					<td>Password</td>
					<td>:<input type=text value ="'.$data['nik'].'" name=tnik ></td>
				</tr>

				 <tr>
					<td>Petugas</td>
					<td>:<input type=text value ="'.$data['status'].'" name=petugas ></td>
				</tr>

			  <tr>
				<td colspan=2 align=left >
				<input  type=submit value=Simpan>
				<a href=lihatpetugas.php>
					<input  type=button value=Batal>
				</a>
			  </tr>
	</table>';
echo '</form>';
?>