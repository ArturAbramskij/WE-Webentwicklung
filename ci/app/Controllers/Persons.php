<?php

namespace App\Controllers;

class Persons extends BaseController
{
    public function index()
    {

        $data['mitglieder'] = array(
            array(
                'id' => '0',
                'name' => 'Max Mustermann',
                'email' => 'mustermann@muster.de',
                'inProjekt' => false
            ),
            array(
                'id' => '1',
                'name' => 'Petra Müller',
                'email' => 'petra@mueller.de',
                'inProjekt' => true
            )
        );

        return view('persons_site', $data);
    }
}