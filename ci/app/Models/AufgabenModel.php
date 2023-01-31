<?php

namespace App\Models;

class AufgabenModel
{
    function getData() {
        $objects = $this->db->query('SELECT * from aufgaben');
        return $objects->getResultArray();
    }
}