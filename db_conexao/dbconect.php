<?php

class Conecta
{
    var $db;

    function __construct()
    {

        $this->db = new mysqli('localhost', 'user', '', 'cadastro_cep', 0000);
    }

    public function getDb()
    {
        return $this->db;
    }
}
