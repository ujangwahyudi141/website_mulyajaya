<?php
require_once "Class/classDatabase.php";
include "Class/classPindah.php";
$akses = new Database;
$akses->CekSesi();
$upld = new Pindah;
$upld->disimpan();
?>
