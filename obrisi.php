<?php

require('Baza.php');
$baza = new Baza();

$id = $_POST['P_idUcenika'];

$query = "delete from ucenik where id=" . $id;

$baza->ExecuteQuery($query);
