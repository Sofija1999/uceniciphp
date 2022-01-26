<?php

require('Baza.php');
require('Ucenik.php');
$baza = new Baza();

$ucenik = new Ucenik($_POST['P_ime'], $_POST['P_prezime'], $_POST['P_adresa'], $_POST['P_email'], $_POST['P_razredni']);
$ucenik->id = $_POST['P_id'];


$query = "update ucenik set ime='$ucenik->ime', prezime='$ucenik->prezime', adresa='$ucenik->adresa', email='$ucenik->email', razredni_id='$ucenik->razredni_id' where id=$ucenik->id";
$baza->ExecuteQuery($query);
