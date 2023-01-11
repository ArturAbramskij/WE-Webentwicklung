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

    function add_user($username, $email, $password) {
        $personen = $this->db->table('mitglieder');
        $personen->insert(array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ));
    }

    function delete_user($delete_id) {
        $personen = $this->db->table('mitglieder');
        $personen = $personen->select('*');
        $person = $personen->where('id', $delete_id);
        $person->delete();
    }

    function get_user($id) {
        $personen = $this->db->table('mitglieder');
        $personen = $personen->select('*');

        if ($id != NULL) {
            $personen = $personen->where('id', $id);
        }
        $result = $personen->get();

        if ($id != NULL) {
            return $result->getRowArray();
        }
        else {
            return $result->getResultArray();
        }
    }
}