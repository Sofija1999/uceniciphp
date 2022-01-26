<?php

include('Baza.php');
include('Ucenik.php');

$baza = new Baza();
$id = $_POST['P_id'];

$query = "select * from ucenik where id=" . $id;

$baza->ExecuteQuery($query);

while ($ucenik_red = $baza->getResult()->fetch_object()) {
    $ucenik = new Ucenik($ucenik_red->ime, $ucenik_red->prezime, $ucenik_red->adresa, $ucenik_red->email, $ucenik_red->razredni_id);
    $ucenik->id = $id;
}

echo json_encode($ucenik);
