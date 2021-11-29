<?php
require_once "Class/classDatabase.php";
include "Class/classKelahiran.php";
$akses = new Database;
$akses->CekSesi();
$upld = new Kelahiran;
$upld->dilihat();
?>
