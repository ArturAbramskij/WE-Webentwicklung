<?php namespace App\Models;
use CodeIgniter\Model;

class MitgliederModel extends Model
{
    public \CodeIgniter\Database\BaseBuilder $personen;

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

    function add_user($username, $email, $password, $check) {
        $personen = $this->db->table('mitglieder');
        if (isset($_POST["persCheck"])){
            $check = 1;
        }else{
            $check = 0;
        }
        $personen->insert(array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'inProjekt' => $check
        ));
    }

    function update_user($id){
        $this->personen = $this->db->table("mitglieder");
        $this->personen->select("*");
        $person = $this->personen->where("id", $id);
        if (isset($_POST["persCheck"])){
            $check = 1;
        }else{
            $check = 0;
        }
        $person->update(array(
            'username' => $_POST["persName"],
            'email' => $_POST["persEmail"],
            'password' => $_POST["persPassword"],
            'inProjekt' => $check,
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