<?php
require_once "classDatabase.php";
$koneksi = new Database;
$konekan = $koneksi->konek();
class Petugas
{
function dimutakhirkan()
	{
	$nik = $_POST['tnik'];
	$nama = $_POST['tnama'];
	$status = $_POST['petugas'];
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");

	$rubah = mysqli_query($koneksi,"update datapenduduk set 
 													nama		= '$nama',
 													status 		= '$status'
 													where nik	= '$nik'");													

if($rubah)
{
echo "<script>
				alert('Data Berhasil di Mutakhirkan');
				 window.location = 'lihatpetugas.php';
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
	.ganjil:hover, .genap:hover {background: #D4DBE5;}
	</style>	
	</head>";
	$koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	error_reporting(0);
	$qlihat=mysqli_query($koneksi,"select *from datapenduduk where status='petugas' ");
	$baris = mysqli_num_rows($qlihat);	
		
	
	echo "<br><h3 class='aa' align='center'>DATA PETUGAS</h3>";
	echo "<div style='float:top' align='right'>
			<form name=fcari action=lihatpetugas.php method=get>
			<input class='nik' type=text name=tcari size=15 Placeholder='Nik'>
			<input class='car' type=submit value=Pencarian>					
			</form>	
			</div>";
		echo "<center><table>";
	echo "<tr>";
	echo "		<th>No</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Status</th>
				<th>Option</th>
				";
				
					for($i=1;$i<=$baris;$i++)
{
$data = mysqli_fetch_array($qlihat);
echo "<tr align=center><td><p class='arial'>$i</p></td>
<td><p class='arial'>$data[nama]</p></td>
<td><p class='arial'>$data[nik]</p></td>
<td><p class='arial'>$data[status]</p></td>
<td><p class='arial'><a href='editpetugas.php?kunci=$data[nik]'>Edit</a>
	</td>

</tr>";
}
echo "</table>";
echo "</div>";
		
	echo "</table></center>";
}
}
?>
