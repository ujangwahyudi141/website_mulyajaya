<?php	
	require_once "Class/classDatabase.php";
	include "Class/classKTP.php";
	$akses = new Database;
	$akses->CekSesi();
	$upld = new KTP;
	$upld->dicetak();
?>