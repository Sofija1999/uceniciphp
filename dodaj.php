<?php

require('Baza.php');
require('Ucenik.php');
$baza = new Baza();


$ucenik = new Ucenik($_POST['P_Ime'], $_POST['P_Prezime'], $_POST['P_Adresa'], $_POST['P_Email'], $_POST['P_Razredni']);


$query = "insert into ucenik (ime, prezime, adresa, email, razredni_id) 
    values ('$ucenik->ime', '$ucenik->prezime', '$ucenik->adresa', '$ucenik->email', '$ucenik->razredni_id')";
$baza->ExecuteQuery($query);
