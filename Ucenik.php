<?php

class Ucenik
{
    public $id;
    public $ime;
    public $prezime;
    public $adresa;
    public $email;
    public $razredni_id;

    function __construct($ime, $prezime, $adresa, $email, $razredni_id)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->adresa = $adresa;
        $this->email = $email;
        $this->razredni_id = $razredni_id;
    }
}
