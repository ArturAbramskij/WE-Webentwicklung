<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MitgliederModel;

class Persons extends BaseController
{
    public function index()
    {
        $mitgliederModel = new MitgliederModel();

        $data['mitglieder'] = $mitgliederModel->getData();

        return view('persons_site', $data);
    }

    public function create_user() {
        $mitglieder = new MitgliederModel();
        if (isset($_POST['persName']) && isset($_POST['persEmail']) && isset($_POST['persPassword'])) {
            $mitglieder->add_user($_POST['persName'], $_POST['persEmail'], $_POST['persPassword'], $_POST["persCheck"]);
            return redirect()->to(base_url() . '/persons');
        }
    }

    public function edit_user() {
        $mitglieder = new MitgliederModel();
        if (isset( $_POST['edit_btn'])) {
            $user = $mitglieder->get_user($_POST['edit_btn']);
            $data["user"] = $user;
            return view("edit_site", $data);
        }
        if (isset($_POST['delete_btn'])) {
            $id = $_POST['delete_btn'];
            $this->delete_user($id);
            return redirect()->to(base_url() . "/persons");
        }
    }

    public function update_user(){
        $mitglieder = new MitgliederModel();
        $mitglieder->update_user($_POST["persID"]);
        return redirect()->to(base_url() . "/persons");
    }

    public function delete_user($id) {
        $mitglieder = new MitgliederModel();
        $mitglieder->delete_user($id);
    }
}