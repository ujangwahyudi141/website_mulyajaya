<?php
require_once "Class/classDatabase.php";
include "Class/classPetugas.php";
$akses = new Database;
$akses->CekSesi();
$upld = new Petugas;
$upld->dimutakhirkan();
?>
