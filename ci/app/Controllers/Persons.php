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
}