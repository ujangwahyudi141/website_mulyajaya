<?php
require_once "Class/classDatabase.php";
include "Class/classHalaman.php";

$akses = new Database;
$akses->CekSesi();
$main = new Halaman;
$main->FormKematian(); 
?>
