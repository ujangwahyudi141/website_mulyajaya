<?php
require_once "Class/classDatabase.php";
include "Class/classPenduduk.php";
$akses = new Database;
$akses->CekSesi();
$upld = new Penduduk;
$upld->dihapus();
?>
