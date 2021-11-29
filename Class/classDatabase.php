<?php
class Database
{
	var $koneksi;
	function konek()
	{
		$this->koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
		if(!$this->koneksi)
		  echo "koneksi gagal !!!";
	}
	function logout() 
	{
		session_start(); //memeriksa apakah ada yg sudah login
        session_destroy(); //memeriksa apakah ada yg sudah logout
        echo '<script type="text/javascript">';
        echo 'window.open("index.php","_top");';
        echo '</script>';

		
	}
	function CekSesi(){
        session_start();
        if($_SESSION['username'] == ''){
            echo "<script> alert('Akses Ditolak'); </script>";
            echo "<script> window.open('sistemadministrasidesa.php','_top'); </script>";
            exit;
        }
    }

}
?>