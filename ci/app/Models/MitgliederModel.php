<?php namespace App\Models;
use CodeIgniter\Model;

class MitgliederModel extends Model
{
    public function getData(){
        $result = $this->db->query('SELECT * FROM mitglieder order by username');
        return $result->getResultArray();
    }

    public function login(){
        $this->personen = $this->db->table("mitglieder");
        $this->personen->select("password");
        $this->personen->where("mitglieder.email", $_POST["loginEmail"]);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function getID(){
        $this->personen = $this->db->table("mitglieder");
        $this->personen->select("id");
        $this->personen->where("mitglieder.email", $_POST["loginEmail"]);
        $result = $this->personen->get();

        return $result->getRowArray();
    }
}