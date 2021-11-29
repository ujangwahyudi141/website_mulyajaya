<?php
    require_once "Class/classDatabase.php";
    $koneksi = new Database;
    $koneksi->konek();
	$kunci = $_GET['kunci'];
	
	$update = mysqli_query($koneksi->koneksi,"select p.nik, p.nama , p.jk,p.agama, p.tmplahir, p.tgllahir, p.pekerjaan,
								p.alamat, p.nama,
								k.nama_anak, k.nama_ibu,k.berlaku from datapenduduk p, kelahiran k
								where p.nik=$kunci and p.nik=k.nik");
	$data = mysqli_fetch_array($update);
    echo"<form name=fkelahiran action=simpan_ubahkelahiran.php method=post>";
    echo"<table>
         
        </table>";
    echo"<center>";
    echo"<hr><table>";
    echo"<H4>EDIT KELAHIRAN</H4>";
       echo"
                <tr>
				     <td>No KTP/NIK</td>
				     <td>:<input type=text class=a value='$data[nik]' name='nik' readonly></td>
			       </tr>
			  
			  <tr>
			<td>Nama lengkap</td>
			<td>:<input type=text class=a  value='$data[nama]' name='tl' readonly></td>
			  </tr>";
			  
				  echo "<tr>
                  <td>Jenis kelamin</td>
		          <td>:<select name=tjk>";
		          $jenis_kelamin=$data[jk];
		          if ($jenis_kelamin==P)
		             {
		     echo  "<option value=P>Perempuan</option>";
		     echo  "<option value=L>Laki-laki</option>";
		             }else{
		     echo  " <option value=L>Laki-laki</option>";
		     echo  "<option value=P>Perempuan</option>";
		             }
		   
		     echo  "</select>
		           </td>
                   </tr>
			  
			            <tr>
				             <td>Agama</td>
				             <td>:<input type=text class=a  value='$data[agama]' name='tagama' readonly></td>
			            </tr>
			  
			     <tr>
				    <td>Tempat lahir</td>
				    <td>:<input type=text class=a  value='$data[tmplahir]' name='ttm' readonly></td>
			     </tr>
			  
	   <tr>
            <td>Tanggal Lahir</td>
            <td>:<input type=date class=a  value=$data[tgllahir] name='tlahir' ></td>
       </tr>
            
                <tr>
                    <td>Pekerjaan</td>
                    <td>:<input type=text class=a  value= $data[pekerjaan] name='tker' ></td>
                </tr>
               
                         <tr>
					         <td>Alamat</td>
					         <td>:<input type=text class=a  value=$data[alamat] name='talamat'  ></td>
		       		     </tr>
		       		
		      <tr>
				<td>Nama Anak</td>
				<td>:<input type=text class=a  value='$data[nama_anak]' name='tanak' ></td>
		      </tr>

                                   <tr>
					        <td>Nama Ayah</td>
					        <td>:<input type=text class=a  value='$data[nama]' name='tayah' ></td>
		       		               </tr>

		       		               
                                   <tr>
					        <td>Nama Ibu</td>
					        <td>:<input type=text class=a  value=$data[nama_ibu] name='tibu' ></td>
		       		               </tr>
                     
                     
       
                        <tr>
					        <td>Masa berlaku</td>
					        <td>:<input type=date class=a  value=$data[berlaku] name='tber' ></td>
		       		    </tr>
       
         <tr>
          <td colspan=2 align=center>
          <a href= edit.php>
          <input type=submit value='Edit'>
          </a>
          <a href=lihat_kelahiran.php?tcari=>
          <input type=button value=batal>
          </a>
        </tr>
        </center>
        </table> 
        </form>";
      
   
?>
