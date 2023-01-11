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
            $mitglieder->add_user($_POST['persName'], $_POST['persEmail'], $_POST['persPassword']);
            return redirect()->to(base_url() . '/persons');
        }
    }

    public function edit_user() {
        if (isset( $_POST['edit_btn'])) {
            $id = $_POST['edit_btn'];
            $this->show_user_properties($id);
        }
        if (isset($_POST['delete_btn'])) {
            $id = $_POST['delete_btn'];
            $this->delete_user($id);
        }
    }

    public function show_user_properties($user_id) {
        $mitglieder = new MitgliederModel();
        $id = $mitglieder->get_user($user_id);
        $data['user'] = $id;

        echo ("222");
        die();
    }

    public function delete_user($id) {
        $mitglieder = new MitgliederModel();
        $mitglieder->delete_user($id);

        $data['persons'] = $mitglieder->getData();
        return view('mitglieder', $data);

    }

}