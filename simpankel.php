<?php
require_once "Class/classDatabase.php";
include "Class/classKelahiran.php";
$akses = new Database;
$akses->CekSesi();
$smp = new Kelahiran;
$smp->disimpan(); 
?>

