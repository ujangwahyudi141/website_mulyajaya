<?php
require_once "classDatabase.php";
class Login
{
	var $username, $password;
function validasi()
{
	$this->koneksi = new Database; // Memanggil class akses
        $this->koneksi->konek(); // Memanggil method BukaDB untuk open database

        if (isset($_POST['password'])){
            $this->password = $_POST['password'];
        }
        if (isset($_POST['username'])){
            $this->username = $_POST['username'];
        }
	$this->koneksi = mysqli_connect("localhost","root","010498Wahyu","db_mulyajaya2");
	$login = mysqli_query($this->koneksi,"select * from datapenduduk where nama = '$this->username' and nik = '$this->password'");
        $data = mysqli_fetch_array($login);

      if (($this->username != $data['nama']) || ($this->password != $data['nik'])){
            echo "<script>alert('Username / Password Salah');</script>";
            echo "<script>document.location.href = 'sistemadministrasidesa.php'; </script>";
        }
        else
        {
            //daftarkan ID jika user dan password benar
            session_start();
            $_SESSION['username'] = $data['nama'];
            $_SESSION['grup'] = $data['status'];
            $this->username = $_SESSION['username'];

            if($data['status'] == 'Petugas') 
            {
            header("Location: home.php");
             }
             else  
              {
               header("Location: FormMenu.php");
                  }

        }
}
}
?>
