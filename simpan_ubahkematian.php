<?php
require_once "Class/classDatabase.php";
include "Class/classKematian.php";
$akses = new Database;
$akses->CekSesi();
$upld = new Kematian;
$upld->dimutakhirkan();
?>
