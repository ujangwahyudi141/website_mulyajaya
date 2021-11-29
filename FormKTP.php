<?php
require_once "Class/classDatabase.php";
require_once "Class/classHalaman.php";
$akses = new Database;
$akses->CekSesi();
$main = new Halaman;
$main->FormKTP(); 
?>
