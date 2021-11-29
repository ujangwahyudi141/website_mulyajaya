<?php
require_once "Class/classDatabase.php";
include "Class/classKTP.php";
$akses = new Database;
$akses->CekSesi();
$smpn = new KTP;
$smpn->disimpan();
?>
