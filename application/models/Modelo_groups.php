<?php

class Modelo_groups extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function RetornarID() {
        $this->db->query("SELECT id FROM groups WHERE ");
    }
}