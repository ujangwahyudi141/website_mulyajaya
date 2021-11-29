<?php
require_once "Class/classDatabase.php";
require_once "Class/classHalaman.php";
$halaman = new Halaman;
$halaman->HalamanUtama();
$logout = new Database;
$logout->CekSesi();
?>
