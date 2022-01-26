<?php
class Baza
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "skolaucenici";
    private $conn;
    private $result;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    function ExecuteQuery($query)
    {
        if ($this->result = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}
